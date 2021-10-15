class ayaomar123 extends Developer
{
    public String $name = "Aya Omar";
    public String $position = "Laravel Developer";

    public function knowledge()
    {
        return collect([
            "Laravel"
        ]);
    }

    public function contacts()
    {
        return collect([
            "twitter" => "https://twitter.com/Aya_Al_Rahmann",
            "github" => "https://github.com/ayaomar123",
        ]);
    }
}
