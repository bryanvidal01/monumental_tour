<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

$background = array(
    'https://media2.giphy.com/media/fniOPx1Sf5QNjh0yqQ/giphy.gif?cid=790b7611a889fe268433fd048721cece9b373af8a133d06a&rid=giphy.gif',
    'https://media1.giphy.com/media/U6Fxnc2jTlBh2GKCTU/giphy.gif?cid=790b76114a9cef75f2d2484362483787ca9b18afbeb6d659&rid=giphy.gif',
    'https://media2.giphy.com/media/igI5wQT6pdXgGlSDEM/giphy.gif?cid=790b7611f3c5e45e91bbd1b0ff53270a74b971d85ab2ba53&rid=giphy.gif',
    'https://media1.giphy.com/media/l1J9u3TZfpmeDLkD6/giphy.gif?cid=790b7611991f836d6ebde9b75511200074fab39bb92ed603&rid=giphy.gif',
    'https://media1.giphy.com/media/l1J9u3TZfpmeDLkD6/giphy.gif?cid=790b7611991f836d6ebde9b75511200074fab39bb92ed603&rid=giphy.gif',
    'https://media1.giphy.com/media/WH85q8e201wlO/giphy.gif?cid=790b7611957cd9fc7d14182a229b80602673baa83f4fbcf8&rid=giphy.gif',
    'https://media0.giphy.com/media/22CEvbj04nLLq/giphy.gif?cid=790b7611d267b613354eadd027ffc86a66fc067ab91f15a6&rid=giphy.gif',
    'https://media3.giphy.com/media/eKrgVyZ7zLvJrgZNZn/giphy.gif?cid=790b76112f634e8a7f5fe8304f5ff1fdbcbf382bece917f7&rid=giphy.gif',
    'https://media3.giphy.com/media/2iypzGlDDHTfa/giphy.gif?cid=790b761114356713af64de66480b90ef212d01a22bde6f48&rid=giphy.gif',
    'https://media1.giphy.com/media/vvbe1fAvbWr5TgcADI/giphy.gif?cid=790b7611de60e9a24fd53441058d9da1fb896d7429bb75d1&rid=giphy.gif',
);

$backgroundRand = array_rand($background);

get_header();
?>
<div class="container-404" style="background-image: url('<?php echo $background[$backgroundRand]; ?>');">

    <div class="content-404">
        <div class="title-medium">
            Oh... La page n'existe pas
        </div>
        <p class="description-text">
            Mais tout n'est pas perdu, vous pouvez retourner sur la page d'accueil !
        </p>

        <a href="<?php echo get_site_url(); ?>" class="button white">
            Back to the futur
        </a>
    </div>
</div>
<?php
get_footer();
