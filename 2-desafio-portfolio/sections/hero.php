<main class="bg-[url('./img/background_intro.png')] bg-cover bg-no-repeat min-h-[42.625rem] px-[10.1875rem] py-[7.5rem] flex items-center">
    <div class="max-w-[42.5rem] flex items-center justify-center flex-col mx-auto ">
        <img src="https://github.com/gabrielgyns.png" class="rounded-full h-30 border p-1 border-[#E3646E] border-3 mb-[3.5rem]" />

        <h1 class="font-[Inconsolata] text-[1.25rem]">Hello World! Meu nome é <span class="text-[#E3646E]">Gabriel Soares</span> e sou</h1>
        <h2 class="font-[Asap] mb-[1.25rem] mt-1 font-bold text-[3.5rem]">Desenvolvedor Front e PHP</h2>
        <p class="font-[Maven_Pro] text-center text-[0.875rem] leading-[1.4] text-[#878EA1]">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</p>

        <div class="flex gap-2 mt-[5rem]">
            <?php
            $tagText = "React";
            $tagColor = "bg-[#61DAFB]";
            require 'components/tag.php';
            ?>
            <?php
            $tagText = "CSS";
            $tagColor = "bg-[#1572B6]";
            require 'components/tag.php';
            ?>
            <?php
            $tagText = "HTML";
            $tagColor = "bg-[#E34F26]";
            require 'components/tag.php';
            ?>
            <?php
            $tagText = "JavaScript";
            $tagColor = "bg-[#F7DF1E]";
            require 'components/tag.php';
            ?>
            <?php
            $tagText = "TypeScript";
            $tagColor = "bg-[#3178C6]";
            require 'components/tag.php';
            ?>
            <?php
            $tagText = "PHP";
            $tagColor = "bg-[#777BB4]";
            require 'components/tag.php';
            ?>
        </div>
    </div>
</main>