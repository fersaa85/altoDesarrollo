<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ContactRepository implements ContactRepositoryInterface
{
    protected $model;

    /**
     * PostRepository constructor.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    public function create(array $data)
    {
        Contact::create($data);
    }
}
