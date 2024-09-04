<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SimpleEmail;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{

    public function sendEmail(Request $request)
    {
      // Валидация входных данных
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
         'message' => 'required|string',
     ]);


        // Логирование данных POST-запроса
     //   Log::info('Получен запрос на отправку письма', [
     //       'email' => $validated['email'],
     //       'name' => $validated['name'],
     //       'message' => $validated['message']
      //  ]);

        try {
            // Отправка письма с использованием проверенных данных
            Mail::to($validated['email'])->send(new SimpleEmail(
                "Обратная связь от " . $validated['name'],
                $validated['message']
            ));

            Log::info('Письмо успешно отправлено', [
                'email' => $request->input('email'),
                'name' => $request->input('name')
            ]);

            return response()->json([
                'message' => 'Письмо успешно отправлено разработчикам.',
                'script' => "Swal.fire('Успех!', 'Письмо успешно отправлено.', 'success');"
            ], 200);
        } catch (\Exception $e) {
            Log::error('Ошибка при отправке письма', [
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'message' => 'Невозможно отправить почту',
                'script' => "Swal.fire('Ошибка', 'Невозможно отправить почту', 'error');",
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
