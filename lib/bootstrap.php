<?

class app
{
    global $segments;
    public function __construct()
    {
        $this->segments();
        var_dump($this->segments);
    }
    private function segments()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->segments = explode('/', $url);
    }
}