<?php
$socialMedias = [
    ["name" => "Linkedin", "icon" => "ph ph-linkedin-logo", "url" => "https://www.linkedin.com/in/gabrielgyns/"],
    ["name" => "Instagram", "icon" => "ph ph-instagram-logo", "url" => "https://www.instagram.com/sgabriel.dev/"],
    ["name" => "GitHub", "icon" => "ph ph-github-logo", "url" => "https://github.com/gabrielgyns"],
    ["name" => "Email", "icon" => "ph ph-envelope-simple", "url" => "mailto:gabrielgyns@gmail.com"],
];
?>

<section class="bg-[url('./img/background_contacts.png')] bg-cover bg-no-repeat min-h-[42.625rem]">
    <div class="mx-auto px-[10.1875rem] py-[7.5rem] flex flex-col items-center justify-center">
        <span class="text-[1.25rem] text-[#BB72E9] tracking-widest font-bold font-[Inconsolata] mb-[0.5rem]">Contato</span>
        <h2 class="font-[Asap] text-[1.5rem] font-bold mb-[0.5rem]">Gostou do meu trabalho?</h2>
        <span class="font-[Maven_Pro] font-medium leading-[1.4] text-[#C0C4CE]">Entre em contato ou acompanhe as minhas redes sociais!</span>

        <div class="flex flex-col gap-4 mt-[3.5rem]">
            <?php foreach ($socialMedias as $socialMedia): ?>
                <?php
                $socialMediaInfo = $socialMedia;
                require 'components/social-button.php';
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>