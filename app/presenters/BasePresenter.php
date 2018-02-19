<?php

namespace App\Presenters;

use Nette;
use App\Model;
use Nittro\Bridges\NittroUI\Presenter;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter
{
    private $signalled = false;

    protected function isSignalled(){
        return $this->signalled;
    }

    protected function startup()
    {
        parent::startup();
        $this->signalled = $this->getSignal() !== null;
        $this->setDefaultSnippets(['header', 'content', 'menu']);
    }

    protected function afterRender()
    {
        parent::afterRender();
        if ($this->isAjax() && !$this->isControlInvalid() && !$this->isSignalled()) {
            // redraw all the snippets that should be updated
            // on any regular page load
            $this->redrawControl('content');

        }
    }
    public function sendPayload() {
        if ($this->hasFlashSession()) {
            $flashes = $this->getFlashSession();
            $this->payload->flashes = iterator_to_array($flashes->getIterator());
            $flashes->remove();

        }

        parent::sendPayload();

    }
}
