<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConfigurationController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('configuration', ['configuration' => Configuration::newOrFind()]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function handle(Request $request): RedirectResponse
    {
        $validator = $this->getValidationFactory()->make(
            $request->all(),
            [
                'video' => 'url|required',
            ],
            [
                'video.required' => trans('messages.validator.required_video'),
                'video.url' => trans('messages.validator.invalid_video'),
            ]
        );

        if ($validator->fails()) {
            return redirect('configuration')
                ->withErrors($validator)
                ->withInput();
        }

        $configuration = Configuration::newOrFind();
        $configuration->video_url = $request->get('video');
        $configuration->save();

        return redirect()->back()->with('message', 'Se ha actualizado la configuración.');
    }
}
