<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionSafeSearch;
use App\Models\Article;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|min:10')]
    public $description;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;
    public $images=[];
    public $temporary_images;


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
            'temporary_images' =>'max:6'
        ]))
        {
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }
    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
    public function save(){
        $this->validate();
        $this->article=Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
            ]);

            if(count($this->images)>0){
                foreach($this->images as $image){
                    $newFileName = "articles/{$this->article->id}";
                    $newImage = $this->article->images()->create(['path'=>$image->store('images','public')]);
                    dispatch(new ResizeImage($newImage->path, 300, 300));
                    dispatch(new GoogleVisionSafeSearch($newImage->id));
                }
                File::deleteDirectory(storage_path('/app/livewire-tmp'));
            }



            session()->flash('success', 'Articolo creato con successo');
            $this->cleanForm();
    }

    protected function cleanForm(){
        $this->title='';
        $this->description='';
        $this->category='';
        $this->price='';
        $this->images=[];
    }
    public function render()
    {
        return view('livewire.create-article-form');
    }


}
