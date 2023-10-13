<div class="card">
    <div>
                    <?php
                echo "<img src='" . $single['img'] . "'>";
                ?> 
        <p>
            <?php
            echo $single['artist'];
            echo '</br>';
            echo $single['title'];
            ?>
        </p>
        <div>
            <div>
    
            <a href='<?php echo$single['link']?>' class="button">Listen
            </a> 
            </div>
            <p>
                <?php 
                echo $single['time'];
                echo '</br>';
                echo $single['genre'];
                echo '</br>';
                echo $single['year'];
                ?>
            </p>
        </div>
    </div>
</div>

<style>

    a{
        list-style:none;
    }

        .foto{
        width: 10rem;
        height: 10rem;
        background: red;
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
    }

    img{
        width: 100%;
        height: 50%;
        border-bottom-left-radius: 2rem;
        border-bottom-right-radius: 2rem;
    }
</style>