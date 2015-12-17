<script type="text/html" id="item_tmpl">
    <div class="bookmark_single" data-id="<&= id &>">
        <p class="bookmark_actions">
            <span class="bookmark_delete">
                <img class="svg" src="<?php print_unescaped(OCP\image_path("", "actions/delete.svg")); ?>"
                     title="<?php p($l->t('Delete')); ?>">
            </span>&nbsp;
        </p>
        <p class="bookmark_title">
            <a href="<&= checkURL(encodeURI(url)) &>" target="_blank" class="bookmark_link" rel="noreferrer">
                <&= escapeHTML(title == '' ? encodeURI(url) : title ) &>
            </a>
            <span class="bookmark_edit bookmark_edit_btn">
                <img class="svg" src="<?php print_unescaped(OCP\image_path("", "actions/rename.svg")); ?>" title="<?php p($l->t('Edit')); ?>">
            </span>
        </p>
        <span class="bookmark_desc"><&= escapeHTML(description)&> </span>
        <span class="bookmark_date"><&= formatDate(added_date) &></span>
    </div>
</script>

<script type="text/html" id="item_form_tmpl">
    <div class="bookmark_single_form" data-id="<&= id &>">
        <form method="post" action="bookmark" >
            <input type="hidden" name="record_id" value="<&= id &>" />
            <p class="bookmark_form_title">
                <input type="text" name="title" placeholder="<?php p($l->t('The title of the page')); ?>"
                       value="<&= escapeHTML(title) &>"/>
            </p>
            <p class="bookmark_form_url">
                <input type="text" name="url" placeholder="<?php p($l->t('The address of the page')); ?>"
                       value="<&= encodeURI(url)&>"/>
            </p>
            <div class="bookmark_form_tags"><ul>
                    <& for ( var i = 0; i < tags.length; i++ ) { &>
                    <li><&= escapeHTML(tags[i]) &></li>
                    <& } &>
                </ul></div>
            <p class="bookmark_form_desc">
                <textarea name="description" placeholder="<?php p($l->t('Description of the page')); ?>"
                          ><&= escapeHTML(description) &></textarea>
            </p>
            <p class="bookmark_form_submit">
                <button class="reset" ><?php p($l->t('Cancel')); ?></button>
                <input type="submit" class="primary" value="<?php p($l->t('Save')); ?>">
            </p>
        </form>
    </div>
</script>
<script type="text/html" id="tag_tmpl">
    <li class="with-menu">
        <a href="" class="">
            <span class="title"><&= escapeHTML(tag) &></span>
        </a>
        <div class="app-navigation-entry-utils">
            <ul>
                <li class="app-navigation-entry-utils-counter"><&= nbr &></li>
                <li class="app-navigation-entry-utils-menu-button svg"><button></button></li>
            </ul>
        </div>
        <div class="app-navigation-entry-menu">
            <ul>
                <li><button class="icon-rename svg" title="<?php p($l->t('rename')); ?>"</button></li>
                <li><button class="icon-delete svg" title="<?php p($l->t('delete')); ?>"></button></li>
            </ul>
        </div>
        <div class="app-navigation-entry-edit">
            <form>
                <input class="edit" type="text" autofocus-on-insert>
                <input type="submit" value="" class="action icon-checkmark svg">
            </form>
        </div>
    </li>
</script>
