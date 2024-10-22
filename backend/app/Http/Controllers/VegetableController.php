<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class VegetableController extends Controller
{
    public function show(int $id) : View
    {
        $vegetable = $this->loadVegetables()->first(fn ($vegetable) => $vegetable["id"] == $id);
        return view("vegetables.show", [
            "title" => $vegetable["name"],
            "vegetable" => $vegetable
        ]);
    }
    public function table(Request $request) : View
    {
        return view("vegetables.table",
    [
        "title" => "Zoldsegek tablazatban", 
        "vegetables" => $this->loadVegetables()->filter(fn ($vegetable) => str_contains($vegetable["name"], $request->query("name", "")))
    ]);
    }
    public function index() : View
    {
        return view("vegetables.index", [
            "title" => "Zoldsegek",
            "vegetables" => $this->loadVegetables()
        ]);
    }
    private function loadVegetables() : Collection
    {
        return collect([
            [
                "id" => 1,                 
                "name"=> "cékla",
                "description" => "Régóta ismert salátanövény, kevés C-vitamint tartalmaz, amelyből a főzése közben nagy részét elveszíti. Viszont B1- és B2-vitamin-, mész-, foszfor- és vastartalma jelentős.",
                "image"=> "cekla.webp"
            ],
            [             
                "id" => 2,       
                "name"=> "ehető gombák",
                "description" => "Levesnek, salátának, főételként (rántva, pörkölt, fasírozott), de köretnek, hideg- és melegszendvicsekhez is.",
                "image" => "gombak.webp"
            ],
            [
                "id" => 3,
                "name"=> "karalábé",
                "description" => "Nagyobb C-vitamin-tartalma (60 mg/100 g) miatt ajánlatos a nyers fogyasztása. Meszet és foszfort is tartalmaz. Nem savanyítható és konzerválásra is alkalmatlan. ",
                "image" => "karalabe.webp"
            ],
            [
                "id" => 4,
                "name"=> "fokhagyma",
                "description" => "Különleges ízjavító hatása miatt az egész világon kedvelik, egyes ókori népek varázserőt tulajdonítottak neki, gerezdjét amulettként hordták a nyakukban.",
                "image" => "fokhagyma.webp"
            ],
            [
                "id" => 5,
                "name"=> "paprika",
                "description" => "A paprika táplálkozási értéke nagy, mert nagy mennyiségben tartalmaz vitaminokat, és sokoldalúan használható fel. ",
                "image" => "paprika.webp"
            ],
            [
                "id" => 6,
                "name"=> "retek",
                "description" => "Nagy C-vitamin-tartalma miatt a téli vitaminszegény időszakban nagyon hasznos lehet. Csípős íze és illata a hagymával rokon illóolajtól származik, régebben gyógyszerként is használták.",
                "image" => "retek.png"
            ],
        ]);
    }
}
