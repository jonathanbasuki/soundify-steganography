<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    private $email;

    public function __construct()
    {
        $user = auth()->user();

        $email_address = explode('@', $user->email);
        $email_length = strlen($email_address[0]);

        $this->email = substr($email_address[0], 0, 1) . "****" . substr($email_address[0], $email_length - 2, $email_length) . '@' . $email_address[1];
    }

    public function index(): string
    {
        $data = [
            'title' => 'Home | Soundify Audio Steganography',
            'user_email' => $this->email,
        ];

        return view('home', ['data' => $data]);
    }

    public function submit_data()
    {
        $data = $this->request->getPost();
        $audio_data = $this->request->getFile('audio_data');

        if (!$audio_data->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $audio_data->store();
            $filename = explode('uploads/', $filepath);

            $this->userHistoryModel->insert([
                'user_id' => auth()->user()->id,
                'message' => $data['message'],
                'secret_key' => $data['secret_key'],
                'file' => $filename[1],
            ]);

            return redirect()->to('/history');
        }

        return redirect()->back();
    }

    public function delete_data($id)
    {
        $this->userHistoryModel->where('id', $id)->set([
            'deleted_at' => date('Y-m-d H:i:s'),
        ])->update();

        return redirect()->to(base_url('/history'));
    }

    public function history(): string
    {
        $data = [
            'title' => 'User History | Soundify Audio Steganography',
            'records' => $this->userHistoryModel->where('user_id', auth()->user()->id)->where('deleted_at', null)->findAll(),
        ];

        return view('history', ['data' => $data]);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About | Soundify Audio Steganography',
        ];

        return view('about', ['data' => $data]);
    }
}
