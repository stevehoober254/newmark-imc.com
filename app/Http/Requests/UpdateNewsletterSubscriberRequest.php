<?php

namespace App\Http\Requests;

use App\Models\NewsletterSubscriber;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewsletterSubscriberRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('newsletter_subscriber_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'required',
                'unique:newsletter_subscribers,email,' . request()->route('newsletter_subscriber')->id,
            ],
        ];
    }
}
