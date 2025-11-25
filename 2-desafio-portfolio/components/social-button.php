<?php
$name = $socialMediaInfo["name"];
$icon = $socialMediaInfo["icon"];
?>

<button class="bg-[#292C34] rounded-lg p-[1.25rem] flex items-center justify-between gap-2 w-[29.25rem] h-[4.25rem] cursor-pointer border border-2 border-transparent hover:border hover:border-2 hover:border-[#3996DB] transition-all duration-300 hover:text-[#3996DB]">
    <div class="flex items-center justify-center gap-[0.75rem]">
        <i class="<?php echo htmlspecialchars($icon); ?> text-[1.421875rem]"></i>
        <span class="font-[Maven_Pro] font-medium leading-[1.4]"><?php echo htmlspecialchars($name); ?></span>
    </div>

    <i class="ph ph-arrow-up-right text-[#3996DB] text-[1.421875rem]"></i>
</button>