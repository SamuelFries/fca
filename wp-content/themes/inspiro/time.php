<?php
/*
Template Name: Saiba Mais Sobre o Time
*/

get_header();
?>

<!-- Início da Seção de Banner -->
<div class="wp-block-cover alignfull has-parallax is-position-center-center" style="border-radius:0px">
    <span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background wp-image-24 has-parallax" style="background-position:50% 50%;background-image:url('<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/team-banner.jpg'; ?>')"></div>
    <div class="wp-block-cover__inner-container">
        <h3 class="wp-block-heading has-text-align-center has-text-color has-medium-font-size" style="color:#fffffa;text-transform:uppercase">Conheça Nosso Time</h3>
        <p class="has-text-align-center has-white-color has-text-color">Saiba mais sobre os advogados que fazem parte do Fries & Cabral</p>
    </div>
</div>
<!-- Fim da Seção de Banner -->

<!-- Início da Seção dos Advogados -->
<div class="inner-wrap team-section">
    <div class="team-member">
        <img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/cabral.jpg'; ?>" alt="Advogado Cabral" class="team-image"/>
        <h2>Dr. Cabral</h2>
        <p><strong>Especialidade:</strong> Direito Civil e Empresarial</p>
        <p><strong>Descrição:</strong> Coloque aqui as informações detalhadas sobre o advogado Cabral. Fale sobre sua experiência, especializações, e casos de destaque.</p>
    </div>
    
    <div class="team-member">
        <img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/fries.jpg'; ?>" alt="Advogado Fries" class="team-image"/>
        <h2>Dr. Fries</h2>
        <p><strong>Especialidade:</strong> Direito Tributário e Trabalhista</p>
        <p><strong>Descrição:</strong> Coloque aqui as informações detalhadas sobre o advogado Fries. Fale sobre sua experiência, especializações, e casos de destaque.</p>
    </div>
</div>
<!-- Fim da Seção dos Advogados -->

<style>
    .team-section {
        display: flex;
        justify-content: space-around;
        margin: 40px 0;
    }
    .team-member {
        text-align: center;
        width: 45%;
    }
    .team-image {
        width: 100%;
        max-width: 300px;
        border-radius: 50%;
        margin-bottom: 20px;
    }
</style>

<?php
get_footer();
?>