<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class Redirect1 extends Controller{
    // Спросите у пользователя email с помощью формы. Если этот email корректный, то выполните редирект на другое действие и выведите в представлении этого действия переданный email и сообщение о том, что он корректен.

    //Если же email не корректный, снова покажите форму, показав над ней сообщение о некорректности ввода.
    public function one(Request $request){
      $elem = $request->input('num');
      if(preg_match(
        "/^[a-zA-Z0-9-_]+@[a-z]+\.[a-z]{2,3}/", $elem)){
        return redirect('test2')->withInput();

        // сделал ещё проверку что если пользователь зашёл в первый раз и нету get параметров
      }elseif($request->fullUrl() ==
      'http://laravelone/test1'){
        $message = 'введите email';
      }else{
        $message = 'email не корректный';
      }

      return view('redirect.one', [
        'message' => $message,
      ]);
    }

    public function two(Request $request){
      return view('redirect.two', [
        'email' => $request->old('num'),
      ]);
    }

// Именованные маршруты и редирект
// Сделайте именованный маршрут с параметрами, например, /test/{param1}/{param2}. Выполните редирект на данный маршрут, передав при этом значения параметров.
    public function three(){
      return redirect() -> route('user', [
        'val1' => 1,
        'val2' => 2,
      ]);
    }

    public function four(Request $request){
      $url = $request->fullUrl();
      return "выполнен редирект на: $url";
    }
  }
