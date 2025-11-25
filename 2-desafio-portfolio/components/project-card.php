<?php
$title = $projectInfo["title"];
$description = $projectInfo["description"];
$stack = $projectInfo["stack"];
$img = $projectInfo["img"];
?>

<div class="flex gap-4 p-[0.75rem] bg-[#292C34] rounded-lg max-w-[31.75rem] cursor-pointer border border-2 border-transparent hover:border hover:border-2 hover:border-[#878EA1] transition-all duration-300">
    <img src="<?php echo htmlspecialchars($img); ?>" alt="Project 1" class="w-[14rem] h-[10rem] object-cover" />

    <div class="flex flex-col gap-2">
        <span class="text-[#E2E4E9] font-bold font-[Asap]"><?php echo htmlspecialchars($title); ?></span>
        <p class="text-[#C0C4CE] font-[Maven_Pro] text-[0.875rem] leading-[1.4]"><?php echo htmlspecialchars($description); ?></p>

        <div class="flex gap-2 mt-auto">
            <?php foreach ($stack as $tech): ?>
                <?php
                $tagText = $tech['name'];
                $tagColor = $tech['color'];
                require 'components/tag.php';
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>