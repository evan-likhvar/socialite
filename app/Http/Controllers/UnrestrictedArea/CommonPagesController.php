<?php

namespace App\Http\Controllers\UnrestrictedArea;


use Illuminate\Support\Arr;

class StartPageController extends UnrestrictedController
{
    public function startPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.startPage.startPage')->render());

        return $this->renderOutput();
    }

    public function aboutPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top2')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.about.index')->render());

        return $this->renderOutput();
    }

    public function termsPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top2')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.terms.index')->render());

        return $this->renderOutput();
    }

    public function privacyPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top2')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.privacy.index')->render());

        return $this->renderOutput();
    }

    public function helpPage()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top2')->with('locales', $this->siteLocales())->render());
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.help.index')->render());

        return $this->renderOutput();
    }
}
