<nav>
    <ul>
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);
            $category_name = $category->name;
            ?>
            <li><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a></li>
            <?php
        }
        ?>
    </ul>
</nav>