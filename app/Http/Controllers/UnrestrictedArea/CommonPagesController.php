<?php

namespace App\Http\Controllers\UnrestrictedArea;


use Illuminate\Support\Arr;

class CommonPagesController extends UnrestrictedController
{

    public function aboutPage()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.about.index')->render());

        return $this->preRenderOutput();
    }

    public function termsPage()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.terms.index')->render());

        return $this->preRenderOutput();
    }

    public function privacyPage()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.privacy.index')->render());

        return $this->preRenderOutput();
    }

    public function helpPage()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.help.index')->render());

        return $this->preRenderOutput();
    }

    public function showLoginForm()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.auth.login-form')->render());

        return $this->preRenderOutput();
    }

    public function showRegisterForm()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.auth.register-form')->render());

        return $this->preRenderOutput();
    }

    public function showLinkRequestForm()
    {
        $this->vars = Arr::add($this->vars, 'content', view('unrestrictedArea.contents.auth.link-request-form')->render());

        return $this->preRenderOutput();
    }

    private function preRenderOutput()
    {
        $this->vars = Arr::add($this->vars, 'navigation', view('unrestrictedArea.topBlock.top2')->with('locales', $this->siteLocales())->render());

        return $this->renderOutput();
    }
}
