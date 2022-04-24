{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":15,"column":0},"end":{"row":17,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":3}],[{"start":{"row":15,"column":0},"end":{"row":28,"column":66},"action":"insert","lines":["// 本のダッシュボード表示","Route::get('/', [BookController::class, 'index']);","","// 新「本」を追加","Route::post('/books', [BookController::class, 'store']);","","//「本」の更新画面表示","Route::get('/booksedit/{book}',[BookController::class, 'edit']);","","//「本」の更新処理","Route::post('books/update',[BookController::class, 'update']);","","// 本を削除","Route::delete('/book/{book}', [BookController::class, 'destroy']);"],"id":4}],[{"start":{"row":28,"column":66},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":30,"column":0},"end":{"row":32,"column":49},"action":"insert","lines":["//web.php","","Route::resource('contacts', 'ContactController');"],"id":7}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":9},"action":"remove","lines":["//web.php"],"id":8}],[{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"insert","lines":["/"],"id":9}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"remove","lines":["'"],"id":10}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"insert","lines":["{"],"id":11}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"remove","lines":["{"],"id":12}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"insert","lines":["["],"id":13}],[{"start":{"row":32,"column":47},"end":{"row":32,"column":48},"action":"insert","lines":[":"],"id":14},{"start":{"row":32,"column":48},"end":{"row":32,"column":49},"action":"insert","lines":[":"]}],[{"start":{"row":32,"column":49},"end":{"row":32,"column":50},"action":"insert","lines":["c"],"id":15},{"start":{"row":32,"column":50},"end":{"row":32,"column":51},"action":"insert","lines":["l"]},{"start":{"row":32,"column":51},"end":{"row":32,"column":52},"action":"insert","lines":["a"]},{"start":{"row":32,"column":52},"end":{"row":32,"column":53},"action":"insert","lines":["s"]},{"start":{"row":32,"column":53},"end":{"row":32,"column":54},"action":"insert","lines":["s"]}],[{"start":{"row":32,"column":54},"end":{"row":32,"column":55},"action":"insert","lines":[","],"id":16}],[{"start":{"row":32,"column":55},"end":{"row":32,"column":56},"action":"insert","lines":[" "],"id":17}],[{"start":{"row":32,"column":56},"end":{"row":32,"column":58},"action":"insert","lines":["''"],"id":18}],[{"start":{"row":32,"column":57},"end":{"row":32,"column":58},"action":"insert","lines":["i"],"id":19},{"start":{"row":32,"column":58},"end":{"row":32,"column":59},"action":"insert","lines":["n"]},{"start":{"row":32,"column":59},"end":{"row":32,"column":60},"action":"insert","lines":["d"]},{"start":{"row":32,"column":60},"end":{"row":32,"column":61},"action":"insert","lines":["e"]},{"start":{"row":32,"column":61},"end":{"row":32,"column":62},"action":"insert","lines":["x"]}],[{"start":{"row":32,"column":63},"end":{"row":32,"column":64},"action":"insert","lines":["]"],"id":20}],[{"start":{"row":32,"column":64},"end":{"row":32,"column":65},"action":"insert","lines":[")"],"id":21}],[{"start":{"row":32,"column":65},"end":{"row":32,"column":66},"action":"remove","lines":["'"],"id":22},{"start":{"row":32,"column":65},"end":{"row":32,"column":66},"action":"remove","lines":[")"]}],[{"start":{"row":32,"column":61},"end":{"row":32,"column":62},"action":"remove","lines":["x"],"id":23},{"start":{"row":32,"column":60},"end":{"row":32,"column":61},"action":"remove","lines":["e"]},{"start":{"row":32,"column":59},"end":{"row":32,"column":60},"action":"remove","lines":["d"]},{"start":{"row":32,"column":58},"end":{"row":32,"column":59},"action":"remove","lines":["n"]},{"start":{"row":32,"column":57},"end":{"row":32,"column":58},"action":"remove","lines":["i"]}],[{"start":{"row":32,"column":57},"end":{"row":32,"column":58},"action":"insert","lines":["s"],"id":24},{"start":{"row":32,"column":58},"end":{"row":32,"column":59},"action":"insert","lines":["t"]},{"start":{"row":32,"column":59},"end":{"row":32,"column":60},"action":"insert","lines":["o"]},{"start":{"row":32,"column":60},"end":{"row":32,"column":61},"action":"insert","lines":["r"]},{"start":{"row":32,"column":61},"end":{"row":32,"column":62},"action":"insert","lines":["e"]}],[{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"remove","lines":["e"],"id":25},{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"remove","lines":["c"]},{"start":{"row":32,"column":12},"end":{"row":32,"column":13},"action":"remove","lines":["r"]},{"start":{"row":32,"column":11},"end":{"row":32,"column":12},"action":"remove","lines":["u"]},{"start":{"row":32,"column":10},"end":{"row":32,"column":11},"action":"remove","lines":["o"]},{"start":{"row":32,"column":9},"end":{"row":32,"column":10},"action":"remove","lines":["s"]},{"start":{"row":32,"column":8},"end":{"row":32,"column":9},"action":"remove","lines":["e"]},{"start":{"row":32,"column":7},"end":{"row":32,"column":8},"action":"remove","lines":["r"]}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":8},"action":"insert","lines":["g"],"id":26},{"start":{"row":32,"column":8},"end":{"row":32,"column":9},"action":"insert","lines":["e"]},{"start":{"row":32,"column":9},"end":{"row":32,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":32,"column":56},"end":{"row":32,"column":57},"action":"remove","lines":["e"],"id":28},{"start":{"row":32,"column":55},"end":{"row":32,"column":56},"action":"remove","lines":["r"]},{"start":{"row":32,"column":54},"end":{"row":32,"column":55},"action":"remove","lines":["o"]},{"start":{"row":32,"column":53},"end":{"row":32,"column":54},"action":"remove","lines":["t"]},{"start":{"row":32,"column":52},"end":{"row":32,"column":53},"action":"remove","lines":["s"]}],[{"start":{"row":32,"column":52},"end":{"row":32,"column":53},"action":"insert","lines":["i"],"id":29},{"start":{"row":32,"column":53},"end":{"row":32,"column":54},"action":"insert","lines":["n"]},{"start":{"row":32,"column":54},"end":{"row":32,"column":55},"action":"insert","lines":["d"]},{"start":{"row":32,"column":55},"end":{"row":32,"column":56},"action":"insert","lines":["e"]},{"start":{"row":32,"column":56},"end":{"row":32,"column":57},"action":"insert","lines":["x"]}],[{"start":{"row":32,"column":61},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":30}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":61},"action":"insert","lines":["Route::get('/contacts', [ContactController::class, 'index']);"],"id":31}],[{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"remove","lines":["t"],"id":32},{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"remove","lines":["e"]},{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"remove","lines":["g"]}],[{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"insert","lines":["p"],"id":33},{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"insert","lines":["o"]},{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"insert","lines":["s"]},{"start":{"row":33,"column":10},"end":{"row":33,"column":11},"action":"insert","lines":["t"]},{"start":{"row":33,"column":11},"end":{"row":33,"column":12},"action":"insert","lines":["s"]}],[{"start":{"row":33,"column":11},"end":{"row":33,"column":12},"action":"remove","lines":["s"],"id":34}],[{"start":{"row":33,"column":57},"end":{"row":33,"column":58},"action":"remove","lines":["x"],"id":35},{"start":{"row":33,"column":56},"end":{"row":33,"column":57},"action":"remove","lines":["e"]},{"start":{"row":33,"column":55},"end":{"row":33,"column":56},"action":"remove","lines":["d"]},{"start":{"row":33,"column":54},"end":{"row":33,"column":55},"action":"remove","lines":["n"]},{"start":{"row":33,"column":53},"end":{"row":33,"column":54},"action":"remove","lines":["i"]}],[{"start":{"row":33,"column":53},"end":{"row":33,"column":54},"action":"insert","lines":["s"],"id":36},{"start":{"row":33,"column":54},"end":{"row":33,"column":55},"action":"insert","lines":["e"]},{"start":{"row":33,"column":55},"end":{"row":33,"column":56},"action":"insert","lines":["n"]},{"start":{"row":33,"column":56},"end":{"row":33,"column":57},"action":"insert","lines":["d"]}],[{"start":{"row":32,"column":31},"end":{"row":32,"column":32},"action":"remove","lines":["t"],"id":37},{"start":{"row":32,"column":30},"end":{"row":32,"column":31},"action":"remove","lines":["c"]},{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"remove","lines":["a"]},{"start":{"row":32,"column":28},"end":{"row":32,"column":29},"action":"remove","lines":["t"]},{"start":{"row":32,"column":27},"end":{"row":32,"column":28},"action":"remove","lines":["n"]},{"start":{"row":32,"column":26},"end":{"row":32,"column":27},"action":"remove","lines":["o"]},{"start":{"row":32,"column":25},"end":{"row":32,"column":26},"action":"remove","lines":["C"]}],[{"start":{"row":32,"column":25},"end":{"row":32,"column":26},"action":"insert","lines":["M"],"id":38},{"start":{"row":32,"column":26},"end":{"row":32,"column":27},"action":"insert","lines":["a"]},{"start":{"row":32,"column":27},"end":{"row":32,"column":28},"action":"insert","lines":["i"]}],[{"start":{"row":32,"column":28},"end":{"row":32,"column":29},"action":"insert","lines":["l"],"id":39}],[{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"remove","lines":["t"],"id":40},{"start":{"row":33,"column":31},"end":{"row":33,"column":32},"action":"remove","lines":["c"]},{"start":{"row":33,"column":30},"end":{"row":33,"column":31},"action":"remove","lines":["a"]},{"start":{"row":33,"column":29},"end":{"row":33,"column":30},"action":"remove","lines":["t"]},{"start":{"row":33,"column":28},"end":{"row":33,"column":29},"action":"remove","lines":["n"]},{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"remove","lines":["o"]},{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"remove","lines":["C"]}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["M"],"id":41},{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"insert","lines":["a"]},{"start":{"row":33,"column":28},"end":{"row":33,"column":29},"action":"insert","lines":["i"]},{"start":{"row":33,"column":29},"end":{"row":33,"column":30},"action":"insert","lines":["l"]}],[{"start":{"row":32,"column":20},"end":{"row":32,"column":21},"action":"remove","lines":["s"],"id":42},{"start":{"row":32,"column":19},"end":{"row":32,"column":20},"action":"remove","lines":["t"]},{"start":{"row":32,"column":18},"end":{"row":32,"column":19},"action":"remove","lines":["c"]},{"start":{"row":32,"column":17},"end":{"row":32,"column":18},"action":"remove","lines":["a"]},{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"remove","lines":["t"]},{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"remove","lines":["n"]},{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"remove","lines":["o"]},{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"remove","lines":["c"]}],[{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"insert","lines":["m"],"id":43},{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"insert","lines":["a"]},{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"insert","lines":["i"]},{"start":{"row":32,"column":16},"end":{"row":32,"column":17},"action":"insert","lines":["l"]}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"remove","lines":["s"],"id":44},{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"remove","lines":["t"]},{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"remove","lines":["c"]},{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"remove","lines":["a"]},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"remove","lines":["t"]},{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"remove","lines":["n"]},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"remove","lines":["o"]},{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"remove","lines":["c"]}],[{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"insert","lines":["m"],"id":45},{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["a"]},{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["i"]},{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["l"]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":47},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":16,"column":3},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function () {","    // この中に認証済み後のルート定義を入れる","});"],"id":48}],[{"start":{"row":19,"column":0},"end":{"row":33,"column":0},"action":"remove","lines":["// 本のダッシュボード表示","Route::get('/', [BookController::class, 'index']);","","// 新「本」を追加","Route::post('/books', [BookController::class, 'store']);","","//「本」の更新画面表示","Route::get('/booksedit/{book}',[BookController::class, 'edit']);","","//「本」の更新処理","Route::post('books/update',[BookController::class, 'update']);","","// 本を削除","Route::delete('/book/{book}', [BookController::class, 'destroy']);",""],"id":49}],[{"start":{"row":14,"column":52},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":29,"column":0},"action":"insert","lines":["// 本のダッシュボード表示","Route::get('/', [BookController::class, 'index']);","","// 新「本」を追加","Route::post('/books', [BookController::class, 'store']);","","//「本」の更新画面表示","Route::get('/booksedit/{book}',[BookController::class, 'edit']);","","//「本」の更新処理","Route::post('books/update',[BookController::class, 'update']);","","// 本を削除","Route::delete('/book/{book}', [BookController::class, 'destroy']);",""],"id":51}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "],"id":52},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["/"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["/"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":[" "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["こ"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["の"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["中"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["に"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["認"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["証"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["済"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["み"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["後"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["の"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["ル"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["ー"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["ト"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["定"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["義"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["を"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["入"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["れ"]},{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["る"]},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":66},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":53},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""]},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":30,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function(){","\t// 中略","\t// 管理者ページ","\tRoute::get('/admin', [BookController::class, 'adminIndex']);","}"],"id":54}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":6},"action":"remove","lines":["Route::group(['middleware' => 'auth'], function(){","\t// 中略"],"id":59}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"remove","lines":["}"],"id":60}],[{"start":{"row":47,"column":0},"end":{"row":49,"column":0},"action":"remove","lines":["","Route::get('/home', [App\\Http\\Controllers\\HomeController::class, 'index'])->name('home');",""],"id":64}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":65}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":76},"action":"insert","lines":["\tRoute::get('/home', [App\\Http\\Controllers\\HomeController::class, 'index']);"],"id":66}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["\t"],"id":67}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":68}],[{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["\t// ログインユーザの本を取得",""],"id":69}],[{"start":{"row":30,"column":16},"end":{"row":31,"column":0},"action":"remove","lines":["",""],"id":70}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["\t"],"id":71}],[{"start":{"row":40,"column":0},"end":{"row":42,"column":3},"action":"insert","lines":["Route::get('/user/{id}', function ($id) {","    // {id}が数値の場合にのみ実行される","});"],"id":72}],[{"start":{"row":40,"column":21},"end":{"row":40,"column":22},"action":"insert","lines":["="],"id":77},{"start":{"row":40,"column":22},"end":{"row":40,"column":23},"action":"insert","lines":["1"]}],[{"start":{"row":40,"column":43},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":78},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]},{"start":{"row":41,"column":4},"end":{"row":42,"column":0},"action":"insert","lines":["",""]},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":61},"action":"remove","lines":["\tRoute::get('/admin', [BookController::class, 'adminIndex']);"],"id":79}],[{"start":{"row":41,"column":4},"end":{"row":41,"column":65},"action":"insert","lines":["\tRoute::get('/admin', [BookController::class, 'adminIndex']);"],"id":80}],[{"start":{"row":33,"column":1},"end":{"row":33,"column":10},"action":"remove","lines":["// 管理者ページ"],"id":82}],[{"start":{"row":38,"column":3},"end":{"row":39,"column":0},"action":"remove","lines":["",""],"id":83},{"start":{"row":38,"column":3},"end":{"row":39,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":9},"action":"insert","lines":["// 管理者ページ"],"id":84}],[{"start":{"row":38,"column":3},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":85},{"start":{"row":39,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":42,"column":22},"end":{"row":42,"column":23},"action":"remove","lines":["1"],"id":86},{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"remove","lines":["="]}],[{"start":{"row":42,"column":22},"end":{"row":42,"column":23},"action":"insert","lines":["="],"id":87},{"start":{"row":42,"column":23},"end":{"row":42,"column":24},"action":"insert","lines":["1"]}],[{"start":{"row":42,"column":17},"end":{"row":42,"column":18},"action":"insert","lines":["s"],"id":88}],[{"start":{"row":42,"column":24},"end":{"row":42,"column":25},"action":"remove","lines":["1"],"id":89},{"start":{"row":42,"column":23},"end":{"row":42,"column":24},"action":"remove","lines":["="]}],[{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"remove","lines":["d"],"id":90},{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"remove","lines":["i"]}],[{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"insert","lines":["1"],"id":91}],[{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"remove","lines":["1"],"id":92}],[{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"insert","lines":["i"],"id":93},{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"insert","lines":["d"]}],[{"start":{"row":54,"column":15},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":97},{"start":{"row":55,"column":0},"end":{"row":56,"column":0},"action":"insert","lines":["",""]},{"start":{"row":56,"column":0},"end":{"row":57,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":57,"column":0},"end":{"row":68,"column":3},"action":"insert","lines":["1","2","3","4","5","6","Route::get('/pivot', function(){ ","    $user=User::find(1);","    foreach ($user->roles as $role) {","        echo $role->pivot;","    }","});"],"id":98}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":1},"action":"remove","lines":["6"],"id":99},{"start":{"row":61,"column":1},"end":{"row":62,"column":0},"action":"remove","lines":["",""]},{"start":{"row":61,"column":0},"end":{"row":61,"column":1},"action":"remove","lines":["5"]},{"start":{"row":60,"column":1},"end":{"row":61,"column":0},"action":"remove","lines":["",""]},{"start":{"row":60,"column":0},"end":{"row":60,"column":1},"action":"remove","lines":["4"]},{"start":{"row":59,"column":1},"end":{"row":60,"column":0},"action":"remove","lines":["",""]},{"start":{"row":59,"column":0},"end":{"row":59,"column":1},"action":"remove","lines":["3"]},{"start":{"row":58,"column":1},"end":{"row":59,"column":0},"action":"remove","lines":["",""]},{"start":{"row":58,"column":0},"end":{"row":58,"column":1},"action":"remove","lines":["2"]},{"start":{"row":57,"column":1},"end":{"row":58,"column":0},"action":"remove","lines":["",""]},{"start":{"row":57,"column":0},"end":{"row":57,"column":1},"action":"remove","lines":["1"]}],[{"start":{"row":56,"column":0},"end":{"row":57,"column":0},"action":"remove","lines":["",""],"id":100}],[{"start":{"row":59,"column":34},"end":{"row":59,"column":35},"action":"insert","lines":["s"],"id":103}],[{"start":{"row":59,"column":34},"end":{"row":59,"column":35},"action":"remove","lines":["s"],"id":104}],[{"start":{"row":59,"column":18},"end":{"row":59,"column":19},"action":"insert","lines":["s"],"id":105}],[{"start":{"row":59,"column":18},"end":{"row":59,"column":19},"action":"remove","lines":["s"],"id":106}],[{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"insert","lines":["s"],"id":107}],[{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"remove","lines":["s"],"id":108}],[{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"insert","lines":["_"],"id":109},{"start":{"row":58,"column":15},"end":{"row":58,"column":16},"action":"insert","lines":["i"]},{"start":{"row":58,"column":16},"end":{"row":58,"column":17},"action":"insert","lines":["d"]}],[{"start":{"row":58,"column":16},"end":{"row":58,"column":17},"action":"remove","lines":["d"],"id":110},{"start":{"row":58,"column":15},"end":{"row":58,"column":16},"action":"remove","lines":["i"]},{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"remove","lines":["_"]}],[{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"insert","lines":["s"],"id":111}],[{"start":{"row":58,"column":14},"end":{"row":58,"column":15},"action":"remove","lines":["s"],"id":112}],[{"start":{"row":41,"column":9},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"insert","lines":["",""]},{"start":{"row":43,"column":0},"end":{"row":44,"column":0},"action":"insert","lines":["",""]},{"start":{"row":44,"column":0},"end":{"row":45,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":42,"column":0},"end":{"row":46,"column":3},"action":"insert","lines":["2","3","Route::middleware(['AdminMiddleware'])->group(function(){"," アドミン以外見られたくないルート設定","});"],"id":114}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":1},"action":"remove","lines":["3"],"id":115},{"start":{"row":42,"column":1},"end":{"row":43,"column":0},"action":"remove","lines":["",""]},{"start":{"row":42,"column":0},"end":{"row":42,"column":1},"action":"remove","lines":["2"]},{"start":{"row":41,"column":9},"end":{"row":42,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":65},"action":"remove","lines":["\tRoute::get('/admin', [BookController::class, 'adminIndex']);"],"id":116}],[{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"remove","lines":["定"],"id":117},{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"remove","lines":["設"]},{"start":{"row":43,"column":16},"end":{"row":43,"column":17},"action":"remove","lines":["ト"]},{"start":{"row":43,"column":15},"end":{"row":43,"column":16},"action":"remove","lines":["ー"]},{"start":{"row":43,"column":14},"end":{"row":43,"column":15},"action":"remove","lines":["ル"]},{"start":{"row":43,"column":13},"end":{"row":43,"column":14},"action":"remove","lines":["い"]},{"start":{"row":43,"column":12},"end":{"row":43,"column":13},"action":"remove","lines":["な"]},{"start":{"row":43,"column":11},"end":{"row":43,"column":12},"action":"remove","lines":["く"]},{"start":{"row":43,"column":10},"end":{"row":43,"column":11},"action":"remove","lines":["た"]},{"start":{"row":43,"column":9},"end":{"row":43,"column":10},"action":"remove","lines":["れ"]},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"remove","lines":["ら"]},{"start":{"row":43,"column":7},"end":{"row":43,"column":8},"action":"remove","lines":["見"]},{"start":{"row":43,"column":6},"end":{"row":43,"column":7},"action":"remove","lines":["外"]},{"start":{"row":43,"column":5},"end":{"row":43,"column":6},"action":"remove","lines":["以"]},{"start":{"row":43,"column":4},"end":{"row":43,"column":5},"action":"remove","lines":["ン"]},{"start":{"row":43,"column":3},"end":{"row":43,"column":4},"action":"remove","lines":["ミ"]},{"start":{"row":43,"column":2},"end":{"row":43,"column":3},"action":"remove","lines":["ド"]},{"start":{"row":43,"column":1},"end":{"row":43,"column":2},"action":"remove","lines":["ア"]}],[{"start":{"row":43,"column":1},"end":{"row":43,"column":62},"action":"insert","lines":["\tRoute::get('/admin', [BookController::class, 'adminIndex']);"],"id":118}],[{"start":{"row":48,"column":0},"end":{"row":52,"column":3},"action":"remove","lines":["Route::get('/users/{id}', function ($id) {","    ","    ","    // {id}が数値の場合にのみ実行される","});"],"id":119}],[{"start":{"row":41,"column":0},"end":{"row":41,"column":3},"action":"insert","lines":["// "],"id":120},{"start":{"row":42,"column":0},"end":{"row":42,"column":3},"action":"insert","lines":["// "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":3},"action":"insert","lines":["// "]},{"start":{"row":44,"column":0},"end":{"row":44,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":59,"column":0},"end":{"row":59,"column":3},"action":"insert","lines":["// "],"id":121},{"start":{"row":60,"column":0},"end":{"row":60,"column":3},"action":"insert","lines":["// "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":3},"action":"insert","lines":["// "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":3},"action":"insert","lines":["// "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":3},"action":"insert","lines":["// "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["\tRoute::get('/admin', [BookController::class, 'adminIndex']);",""],"id":123}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":30,"column":0},"end":{"row":30,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1650835895774,"hash":"fc9bd956a6b5d6eed50d90c3ecffb61266fc70e9"}