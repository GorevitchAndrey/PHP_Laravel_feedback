<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index(){
        return view('feedback.index');
    }
    /**
     * @return Factory|View
     */
    public function submit(FeedbackRequest $request)
    {
        $this->validate($request, $request->rules());

        $feedback = new Feedback();

        $feedback->phone = $request->get('phone');
        $feedback->email = $request->get('email');
        $feedback->message = $request->get('message');



        $feedback->save();

        return redirect()->route('index')->with('success', 'Спасибо за обратную связь');
    }

    /**
     * @return Factory|View
     */
    public function all()
    {
        $feedback = new Feedback();

        return view('feedback.all', ['list'=> $feedback->all()]);
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function view(int $id)
    {
        $feedback = new Feedback();

        return view('feedback.item', ['item'=> $feedback->find($id)]);
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function update(int $id)
    {
        $feedback = new Feedback();

        return view('feedback.update', ['item'=> $feedback->find($id)]);
    }


    public function updateSubmit($id, FeedbackRequest $request)
    {
        $this->validate($request, $request->rules());

        $feedback = Feedback::find($id);

        $feedback->phone = $request->get('phone');
        $feedback->email = $request->get('email');
        $feedback->message = $request->get('message');

        $feedback->save();

        return redirect()->route('feedback-view', $id)->with('success', 'Запись сохранена');
    }

    /**
     * @param int $id
     * @return Factory|View
     */
    public function delete(int $id)
    {
        $feedback = Feedback::query()->findOrFail($id);

        $feedback->delete();

        return redirect()->route('feedback-all');

    }

}
