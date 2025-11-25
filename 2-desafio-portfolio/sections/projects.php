<?php
$projects = [
    [
        "title" => "Travelgram",
        "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo.",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-1.png"
    ],
    [
        "title" => "Página de Receita",
        "description" => "Página com o passo a passo de uma receita para cupcakes",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-2.png"
    ],
    [
        "title" => "Tech News",
        "description" => "Homepage de um portal de notícias sobre a área de tecnologia",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-3.png"
    ],
    [
        "title" => "Refund",
        "description" => "Um sistema para pedido e acompanhamento de reembolso ",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-4.png"
    ],
    [
        "title" => "Página de turismo",
        "description" => "Página com as principais informações para quem quer viajar para Busan",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-5.png"
    ],
    [
        "title" => "Zingen",
        "description" => "Landing Page completa e responsiva de um aplicativo de Karaokê.",
        "stack" => [
            ["name" => "PHP", "color" => "bg-[#777BB4]"],
            ["name" => "HTML", "color" => "bg-[#E34F26]"],
            ["name" => "CSS", "color" => "bg-[#1572B6]"],
            ["name" => "JavaScript", "color" => "bg-[#F7DF1E]"]
        ],
        "img" => "../img/project-1.png"
    ],
];
?>

<section class="min-h-[42.625rem] bg-[#16181D]">
    <div class="mx-auto px-[10.1875rem] py-[7.5rem] flex flex-col items-center justify-center">
        <span class="text-[1.25rem] text-[#E3646E] tracking-widest font-bold font-[Inconsolata] mb-[0.5rem]">Meu trabalho</span>
        <h2 class="font-[Asap] text-[1.5rem] font-bold mb-[3.5rem]">Veja os projetos em destaque</h2>

        <div class="grid grid-cols-2 gap-[1.5rem]">
            <?php foreach ($projects as $project): ?>
                <?php
                $projectInfo = $project;
                require 'components/project-card.php';
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>