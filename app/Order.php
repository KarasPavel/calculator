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
        } else {
            $fileName = '';
        }

        $addresse = 'info@v-t-x.ru';
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
            'order_data' => $orderInfo,
            'application_status_id' => 1,
            'order_date' => $result->orderDate,
            'created_at' => Carbon::now()
        ];
        $message = 'Добрый день. Получен заказ. Отправитель.' .
            '    Имя: '. $order['name'] .
            '    Почта: '. $order['email'] .
            '    Телефон: '. $order['phone'] .
            '    Комметарий: '. $order['comment'] .
            '    Адрес: '. $order['address'] .
            '    Доставка: '. $order['delivery'] .
            '    Количество: '. $order['quantity'] .
            '    Стоимость: '. $order['price'] .
            '    Информация о заказе: '. $order['order_data'];
//        mail($addresse, $title, $message);

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
        } else {
            $fileName = '';
        }

        $addresse = 'info@v-t-x.ru';
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
            'order_data' => $orderInfo,
            'application_status_id' => 1,
            'order_date' => $result->orderDate,
            'created_at' => Carbon::now()
        ];
        $message = 'Добрый день. Получен заказ. Отправитель.' .
            '    Имя: '. $order['name'] .
            '    Почта: '. $order['email'] .
            '    Телефон: '. $order['phone'] .
            '    Комметарий: '. $order['comment'] .
            '    Адрес: '. $order['address'] .
            '    Доставка: '. $order['delivery'] .
            '    Количество: '. $order['quantity'] .
            '    Стоимость: '. $order['price'] .
            '    Информация о заказе: '. $order['order_data'];
//        mail($addresse, $title, $message);

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
