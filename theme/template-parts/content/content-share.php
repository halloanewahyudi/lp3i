<div class="">
    <p>share:</p>
    <div class="flex space-x-3">
        <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
           target="_blank" 
          >
            <i class="bi bi-facebook text-xl"></i>
        </a>

        <!-- Twitter (X) -->
        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
           target="_blank" 
           >
            <i class="bi bi-twitter-x text-xl"></i>
        </a>

        <!-- WhatsApp -->
        <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" 
           target="_blank" 
         >
            <i class="bi bi-whatsapp text-xl"></i>
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
           target="_blank" 
          >
            <i class="bi bi-linkedin text-xl"></i>
        </a>

        <!-- Telegram -->
        <a href="https://t.me/share/url?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
           target="_blank" 
           >
            <i class="bi bi-telegram text-xl"></i>
        </a>
    </div>
</div>
