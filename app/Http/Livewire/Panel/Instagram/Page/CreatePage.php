<?php

namespace App\Http\Livewire\Panel\Instagram\Page;

use App\Models\InstagramPageCategory;
use Livewire\Component;

use Livewire\WithFileUploads;

class CreatePage extends Component
{


    use WithFileUploads;



    public $title;
    public $pageId;
    public $pageCategories=[];
    public $pageCategory;
    public $pageFollowers;
    public $pagePosts;
    public $pageFollowings;
    public $pageProfilePhoto;
    public $pageLastPostPhoto;



    public function mount(){
        $this->pageCategories=InstagramPageCategory::where('status',1)->get();
    }

    protected $rules = [
        'title' => 'required|min:5',
        'pageId' => 'required',
        'pageCategory' => 'required',
        'pageFollowers' => 'required|numeric|min:0',
        'pagePosts' => 'required|numeric|min:0',
        'pageFollowings' => 'required|numeric|min:0',
        'pageProfilePhoto' => 'required|image|max:1024',
        'pageLastPostPhoto' => 'required|image|max:1024',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        $this->validate();
    }




    public function render()
    {
        return view('livewire.panel.instagram.page.create-page');
    }
}
