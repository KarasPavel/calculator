<?php

namespace App;

use App\Services\UploadFileService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'delivery',
        'quantity',
        'price',
        'urgency',
        'order_data',
        'comment',
        'application_status_id',
        'order_date',
        'created_at',
        'updated_at'
    ];

    /**
     * @return mixed
     */
    public static function getOrders()
    {
        return DB::table('orders')
            ->select('orders.id', 'name', 'email', 'phone', 'comment', 'orders.created_at',
                'orders.updated_at', 'status', 'address', 'delivery', 'price', 'urgency', 'order_data',
                'quantity', 'order_date', 'upload_file')
            ->join('statuses', 'application_status_id', '=', 'statuses.id')
            ->orderByDesc('orders.created_at')
            ->get();
    }

    public static function createOrder(Request $request)
    {
        $result = json_decode($request->data);
        $orderInfo = json_encode($result->orderInfo);

        if (!is_null($request->file) && $request->file != 'undefined') {
            $file = new UploadFileService();
            $file->upload($request);
            $fileName = $file->newFileName;
            $filePath = $file->pathFile;
        } else {
            $fileName = '';
            $filePath = '';
        }

        $file = $filePath . $fileName;

        $separator = md5(time());

        $eol = "\r\n";

<<<<<<< HEAD
        $headers = "MIME-Version: 1.0" . $eol;
=======
        $headers = "From: name <test@test.com>" . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
        $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
        $headers .= "This is a MIME encoded message." . $eol;

        if (json_decode($orderInfo)->shape->name === 'Круг') {
            $shapeDescription = 'Диаметр: ' . json_decode($orderInfo)->shape->diameter . ' мм ';
        } else {
            $shapeDescription = json_decode($orderInfo)->shape->width .
                ' x ' . json_decode($orderInfo)->shape->height .
                ' мм ';
        }

        $orderDescription =
            'Материал: ' . json_decode($orderInfo)->material . $eol .
            'Вид: ' . json_decode($orderInfo)->product . $eol .
            'Форма: ' . json_decode($orderInfo)->shape->name . $eol .
            'Размеры: ' . $shapeDescription . $eol .
            'Обработка: ' . json_decode($orderInfo)->format . $eol .
            'Дополнительно: ' . json_decode($orderInfo)->options;

        $addresse3 = 'info@v-t-x.ru';
        $addresse = 'skrypnik.andrii@gmail.com';
        $addresse2 = 'veditex@yandex.ru';
        $addresse4 = 'vadichko@mail.ru';
        $addresse5 = 'westerlandiya@mail.ru';

        $title = 'Заказ';
        $order = [
            'name' => $result->name,
            'email' => $result->email,
            'phone' => $result->phone,
            'comment' => $result->comment,
            'address' => $result->address,
            'delivery' => $result->delivery,
            'quantity' => $result->quantity,
            'price' => $result->price,
            'urgency' => $result->urgency,
            'upload_file' => $fileName,
            'order_data' => $orderDescription,
            'application_status_id' => 1,
            'order_date' => $result->orderDate,
            'created_at' => Carbon::now()
        ];
        $message = 'Добрый день. Получен заказ. Отправитель.' . $eol .
            '    Имя: ' . $order['name'] . $eol .
            '    Почта: ' . $order['email'] . $eol .
            '    Телефон: ' . $order['phone'] . $eol .
            '    Комметарий: ' . $order['comment'] . $eol .
            '    Адрес: ' . $order['address'] . $eol .
            '    Доставка: ' . $order['delivery'] . $eol .
            '    Количество: ' . $order['quantity'] . $eol .
            '    Стоимость: ' . $order['price'] . $eol .
            '    Информация о заказе: ' . $order['order_data'];

        $body = "--" . $separator . $eol;
<<<<<<< HEAD
        $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $message . $eol;
=======
        $body .= "Content-Type: text/plain; charset=\"UTF-8\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $eol . $message . $eol . $eol;
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3

        if ($fileName != '') {
            $content = file_get_contents($file);
            $content = chunk_split(base64_encode($content));
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $fileName . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
<<<<<<< HEAD
            $body .= "Content-Disposition: attachment" . $eol;
            $body .= $content . $eol;
            $body .= "--" . $separator . "--";
        }

        mail($addresse, $title, $body, $headers);
=======
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $eol . $content . $eol . $eol;
            $body .= "--" . $separator . "--";
        }

        mail($addresse, $title, $body, $headers);
        mail($addresse2, $title, $body, $headers);
        mail($addresse3, $title, $body, $headers);
        mail($addresse4, $title, $body, $headers);
        mail($addresse5, $title, $body, $headers);
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3

        try {
            $dbResult = DB::table('orders')
                ->insert([
                    'name' => $result->name,
                    'email' => $result->email,
                    'phone' => $result->phone,
                    'comment' => $result->comment,
                    'address' => $result->address,
                    'delivery' => $result->delivery,
                    'quantity' => $result->quantity,
                    'price' => $result->price,
                    'urgency' => $result->urgency,
                    'upload_file' => $fileName,
                    'session_id' => Session::getId(),
                    'order_data' => $orderInfo,
                    'application_status_id' => 1,
                    'order_date' => $result->orderDate,
                    'created_at' => Carbon::now()
                ]);
            return $dbResult;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public static function createOrderFromCart($request)
    {
        $result = $request;
        $orderInfo = json_encode($result->orderInfo);
        if (!is_null($result->file)) {
            $fileName = $result->file;
            $filePath = public_path('uploadFiles/');
        } else {
            $fileName = '';
            $filePath = '';
        }

        $file = $filePath . $fileName;

        $separator = md5(time());

        $eol = "\r\n";

<<<<<<< HEAD
        $headers = "MIME-Version: 1.0" . $eol;
=======
        $headers = "From: name <test@test.com>" . $eol;
        $headers .= "MIME-Version: 1.0" . $eol;
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
        $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
        $headers .= "This is a MIME encoded message." . $eol;

        if (json_decode($orderInfo)->shape->name === 'Круг') {
            $shapeDescription = 'Диаметр: ' . json_decode($orderInfo)->shape->diameter . ' мм ';
        } else {
            $shapeDescription = json_decode($orderInfo)->shape->width .
                ' x ' . json_decode($orderInfo)->shape->height .
                ' мм ';
        }

        $orderDescription =
            'Материал: ' . json_decode($orderInfo)->material . $eol .
            'Вид: ' . json_decode($orderInfo)->product . $eol .
            'Форма: ' . json_decode($orderInfo)->shape->name . $eol .
            'Размеры: ' . $shapeDescription . $eol .
            'Обработка: ' . json_decode($orderInfo)->format . $eol .
            'Дополнительно: ' . json_decode($orderInfo)->options;


        $addresse = 'info@v-t-x.ru';
        $addresse2 = 'skrypnik.andrii@gmail.com';
        $addresse3 = 'veditex@yandex.ru';
        $addresse4 = 'vadichko@mail.ru';
        $addresse5 = 'westerlandiya@mail.ru';
        $title = 'Заказ';
        $order = [
            'name' => $result->name,
            'email' => $result->email,
            'phone' => $result->phone,
            'comment' => $result->comment,
            'address' => $result->address,
            'delivery' => $result->delivery,
            'quantity' => $result->quantity,
            'price' => $result->price,
            'urgency' => $result->urgency,
            'upload_file' => $fileName,
            'order_data' => $orderDescription,
            'application_status_id' => 1,
            'order_date' => $result->orderDate,
            'created_at' => Carbon::now()
        ];
        $message = 'Добрый день. Получен заказ. Отправитель.' . $eol .
            '    Имя: ' . $order['name'] . $eol .
            '    Почта: ' . $order['email'] . $eol .
            '    Телефон: ' . $order['phone'] . $eol .
            '    Комметарий: ' . $order['comment'] . $eol .
            '    Адрес: ' . $order['address'] . $eol .
            '    Доставка: ' . $order['delivery'] . $eol .
            '    Количество: ' . $order['quantity'] . $eol .
            '    Стоимость: ' . $order['price'] . $eol .
            '    Информация о заказе: ' . $order['order_data'];

        $body = "--" . $separator . $eol;
<<<<<<< HEAD
        $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $message . $eol;
=======
        $body .= "Content-Type: text/plain; charset=\"UTF-8\"" . $eol;
        $body .= "Content-Transfer-Encoding: 8bit" . $eol;
        $body .= $eol . $message . $eol . $eol;
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3

        if ($fileName != '') {
            $content = file_get_contents($file);
            $content = chunk_split(base64_encode($content));
            $body .= "--" . $separator . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"" . $fileName . "\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
<<<<<<< HEAD
            $body .= "Content-Disposition: attachment" . $eol;
            $body .= $content . $eol;
            $body .= "--" . $separator . "--";
        }

        mail($addresse, $title, $body, $headers);
=======
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= $eol . $content . $eol . $eol;
            $body .= "--" . $separator . "--";
        }


        mail($addresse, $title, $body, $headers);
        mail($addresse2, $title, $body, $headers);
        mail($addresse3, $title, $body, $headers);
        mail($addresse4, $title, $body, $headers);
        mail($addresse5, $title, $body, $headers);
>>>>>>> 5fde8f9bb9f11fc783b428795fe6ce729c0af4b3

        $dbResult = DB::table('orders')
            ->insert([
                'name' => $result->name,
                'email' => $result->email,
                'phone' => $result->phone,
                'comment' => $result->comment,
                'address' => $result->address,
                'delivery' => $result->delivery,
                'quantity' => $result->quantity,
                'price' => $result->price,
                'urgency' => $result->urgency,
                'upload_file' => $fileName,
                'session_id' => Session::getId(),
                'order_data' => $orderInfo,
                'application_status_id' => 1,
                'order_date' => $result->orderDate,
                'created_at' => Carbon::now()
            ]);
        return $dbResult;
    }

    public static function deleteOrder($id)
    {
        return DB::table('orders')
            ->where('orders.id', '=', $id)
            ->delete();
    }

    public static function getOrderById($id)
    {
        return DB::table('orders')
            ->where('orders.id', '=', $id)
            ->get();
    }

    /**
     * @param $request
     * @return \Illuminate\Database\Query\Builder
     */
    public static function updateOrder($request)
    {
        DB::table('orders')
            ->where('orders.id', '=', $request->orderId)
            ->update([
                'application_status_id' => $request->status,
                'updated_at' => Carbon::now(),
            ]);
        return back();
    }
}
