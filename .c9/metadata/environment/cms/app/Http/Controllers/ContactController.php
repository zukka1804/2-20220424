{"filter":false,"title":"ContactController.php","tooltip":"/cms/app/Http/Controllers/ContactController.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":84,"column":0},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class ContactController extends Controller","{","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        //","    }","","    /**","     * Show the form for creating a new resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function create()","    {","        //","    }","","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request)","    {","        //","    }","","    /**","     * Display the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function show($id)","    {","        //","    }","","    /**","     * Show the form for editing the specified resource.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function edit($id)","    {","        //","    }","","    /**","     * Update the specified resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function update(Request $request, $id)","    {","        //","    }","","    /**","     * Remove the specified resource from storage.","     *","     * @param  int  $id","     * @return \\Illuminate\\Http\\Response","     */","    public function destroy($id)","    {","        //","    }","}",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["//ContactController.php","","<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","class ContactController extends Controller","{","    public function __construct()","    {","        $this->middleware('auth');","    }","    /**","     * Display a listing of the resource.","     *","     * @return \\Illuminate\\Http\\Response","     */","    public function index()","    {","        return view('contact');","    }","","    /**","     * Store a newly created resource in storage.","     *","     * @param  \\Illuminate\\Http\\Request  $request","     * @return \\Illuminate\\Http\\Response","     */","    public function store(Request $request)","    {","        dd($request);","    }","}"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":34,"column":1},"end":{"row":34,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1650767456160,"hash":"96bd8df79b18c86d153a90c73dcebf8469f3f2ad"}