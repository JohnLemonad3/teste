<?php

include "base.php";

?>

<script>

    function chamaInicio(){
            document.getElementById("sec04").style.display="none";
            document.getElementById("sec03").style.display="none";
            document.getElementById("sec05").style.display="none";
            document.getElementById("sec02").style.display="block";
            document.getElementById("inicio").style.backgroundColor="#C3C2BF";
            document.getElementById("contato").style.backgroundColor="#FFFEF4";
            document.getElementById("sobre").style.backgroundColor="#FFFEF4";
            document.getElementById("servicos").style.backgroundColor="#FFFEF4";
    }

    function chamaSobre(){
            document.getElementById("sec02").style.display="none";
            document.getElementById("sec04").style.display="none";
            document.getElementById("sec05").style.display="none";
            document.getElementById("sec03").style.display="flex";
            document.getElementById("sobre").style.backgroundColor="#C3C2BF";
            document.getElementById("contato").style.backgroundColor="#FFFEF4";
            document.getElementById("inicio").style.backgroundColor="#FFFEF4";
            document.getElementById("servicos").style.backgroundColor="#FFFEF4";
    }

    function chamaContato(){
            document.getElementById("sec02").style.display="none";
            document.getElementById("sec03").style.display="none";
            document.getElementById("sec05").style.display="none";
            document.getElementById("sec04").style.display="flex";
            document.getElementById("contato").style.backgroundColor="#C3C2BF";
            document.getElementById("sobre").style.backgroundColor="#FFFEF4";
            document.getElementById("inicio").style.backgroundColor="#FFFEF4";
            document.getElementById("servicos").style.backgroundColor="#FFFEF4";
    }

    function chamaFashion(){
            document.getElementById("sec02").style.display="none";
            document.getElementById("sec03").style.display="none";
            document.getElementById("sec05").style.display="block";
            document.getElementById("sec04").style.display="none";
            document.getElementById("contato").style.backgroundColor="#FFFEF4";
            document.getElementById("sobre").style.backgroundColor="#FFFEF4";
            document.getElementById("inicio").style.backgroundColor="#FFFEF4";
            document.getElementById("servicos").style.backgroundColor="#C3C2BF";
    }

    function chamaQuest(){
            document.getElementById("sec06").style.display="block";
    }

</script>

<section id="sec01">
<nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
        <li><a id="inicio" onClick='chamaInicio()'>INÍCIO</a></li>
        <li><a id="sobre" onClick='chamaSobre()'>SOBRE MIM</a></li>
        <li class="servicos1"><a id="servicos" class='dropdown-arrow servicos1'>SERVIÇOS</a>
        <ul id="servicos1" class='sub-menus servicos1'>
            <li><a class="subEscolha" onClick='chamaFashion()'>CONSULTORIA</a></li>
            <li><a class="subEscolha" onClick='chamaFashion()'>FASHION STYLING</a></li>
            <li><a class="subEscolha" onClick='chamaFashion()'>PERSONAL STYLING</a></li>
        </ul>
        </li>
        <li><a id="contato" onClick='chamaContato()'>CONTATO</a></li>
    </ul>
    </nav>
</section>

<section id="sec02">

    <div class="logo">
        <img id="img-logo" src="../assets/logo.png">
    </div>

</section>

<section id="sec03">

    <div class="contatos">
    <div class="divisao2" id="divisao2a">
        <img id="img" src="../assets/imagem.png" style="margin:auto; margin-right:1px;">
    </div>
    <div class="divisao2" id="divisao2b">
        <h2 class="titulo">Nossa história</h2>
        <p class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut magna vestibulum, efficitur urna non, 
            tristique risus. Quisque tempus enim at elit faucibus efficitur sed nec arcu. Integer accumsan blandit 
            lorem non sagittis. Nunc et porttitor lorem, et sagittis erat. Maecenas porta porttitor bibendum. Integer 
            lobortis, justo ut mattis euismod, est lorem auctor justo, venenatis pellentesque massa ante vel nunc. Nullam 
            at maximus tortor, sit amet ullamcorper metus.</p>
    </div>

</section>

<section id="sec04">

    <div class="contatos">
    <div class="divisao">
        <a><img class="img-rede" src="../assets/insta.png"></a><br>
        <h4 class="redes">Instagram</h4>
    </div>
    <div class="divisao">
        <a><img class="img-rede" src="../assets/email.png"></a><br>
        <h4 class="redes">Email</h4>
    </div><br>
    <div id="envio" class="divisao">
            <h1 class="titulo">Mande sua dúvida</h1><br>
            <label class="block" for="tel">Telefone <span class="required">*</span></label>
            <input class="block" type="text" id="tel" name="tel" placeholder="(99) 9999-9999" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" title="Número de telefone precisa ser no formato (99) 9999-9999" required="required" />
            <label class="block" for="email">Email <span class="required">*<br></label>
            <input class="block" type="email" id="email" pattern=".+@example\.com" size="30" required />
            <br>
            <textarea id="duvida" name="story" rows="5" cols="33"></textarea><br>
            <button class="enter">Enviar</button>
    </div>
    </div>

</section>

<section id="sec05">

    <p class="introducao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mattis sapien et risus convallis rhoncus. Phasellus rhoncus nulla a porta imperdiet. Proin feugiat malesuada elit, in malesuada massa laoreet sit amet.</p>
    
    <div class="portifolio">
        <img class="img-por" src="../assets/01.png">
        <img class="img-por" src="../assets/02.png">
        <img class="img-por" src="../assets/03.png">
        <img class="img-por" src="../assets/04.png">
    </div>
        <br>
    <a class="abrir" onClick='chamaQuest()'>INICIAR</a>
    
</section>

    <div id="sec06">
        <div id="marcaPagina">
            <p id="bolinha01" class="bolinha"><p id="bolinha02" class="bolinha"><p id="bolinha03" class="bolinha"><p id="bolinha04" class="bolinha"><p id="bolinha05" class="bolinha">
        </div>

        <div class="divPergunta">
        <a class="fechar" onClick="fechar()">x</a>
        <div class="perguntas">
        <div id="tituloId" class="tituloId">
            <h1 class="titulo">Qual o seu Biotipo?</h1>
            <br>
            <div class="radios">
            <input  type="radio" name="imagem" id="i1" />
            <label class="fotoOp" for="i1"><img class="img-op" src="../assets/05.png">Triângulo Invertido</label>
            <input  type="radio" name="imagem" id="i2" />
            <label class="fotoOp" for="i2"><img class="img-op" src="../assets/06.png">Triângulo</label>
            <input type="radio" name="imagem" id="i3" />
            <label class="fotoOp" for="i3"><img class="img-op" src="../assets/07.png">Retângulo</label>
            <input type="radio" name="imagem" id="i4" />
            <label class="fotoOp" for="i4"><img class="img-op" src="../assets/08.png">Ampulheta</label>
            <input type="radio" name="imagem" id="i5" />
            <label class="fotoOp" for="i5"><img class="img-op" src="../assets/09.png">Oval</label>
            </div>
        </div>

        <div id="tituloId2">
            <h1 class="titulo">Qual sua maior diculdade em montar o look?</h1>
            <br>
            <div class="radios">
            <input  type="radio" name="imagem" id="o1" />
            <label class="fotoOp" for="o1">Não sabe combinar as roupas</label>
            <input  type="radio" name="imagem" id="o2" />
            <label class="fotoOp" for="o2">Sentir que não tem roupa suficiente</label>
            <input type="radio" name="imagem" id="o3" />
            <label class="fotoOp" for="o3">Sair do básico e ser criativo</label>
            <input type="radio" name="imagem" id="o4" />
            <label class="fotoOp" for="o4">Se expressar por meio do outfit</label>
            <input type="radio" name="imagem" id="o5" />
            <label class="fotoOp" for="o5">Se sentir bem com o corpo</label>
            </div>
        </div>

        <div id="tituloId3">
            <h1 class="titulo">Qual conteúdo você gosta de acompanhar?</h1>
            <br>
            <div class="radios">
            <input  type="radio" name="imagem" id="p1" />
            <label class="fotoOp" for="p1">GRWM</label>
            <input  type="radio" name="imagem" id="p2" />
            <label class="fotoOp" for="p2">Rotinas/Mini Vlogs</label>
            <input type="radio" name="imagem" id="p3" />
            <label class="fotoOp" for="p3">História da moda, tendeências, backstage, etc</label>
            <input type="radio" name="imagem" id="p4" />
            <label class="fotoOp" for="p4">Styling de looks básicos</label>
            <input type="radio" name="imagem" id="p5" />
            <label class="fotoOp" for="p5">inspirações de looks (curtos objetivos)</label>
            </div>
        </div>

        <div id="tituloId4">
            <h1 class="titulo">Qual sua maior diiculdade em montar o look?</h1>
            <br>
            <div class="radios">
            <input  type="radio" name="imagem" id="l1" />
            <label class="fotoOp" for="l1">Não sabe combinar as roupas</label>
            <input  type="radio" name="imagem" id="l2" />
            <label class="fotoOp" for="l2">Sentir que não tem roupa suficiente</label>
            <input type="radio" name="imagem" id="l3" />
            <label class="fotoOp" for="l3">Sair do básico e ser criativo</label>
            <input type="radio" name="imagem" id="l4" />
            <label class="fotoOp" for="l4">Se expressar por meio do outfit</label>
            <input type="radio" name="imagem" id="l5" />
            <label class="fotoOp" for="l5">Se sentir bem com o corpo</label>
            </div>
        </div>

        <div id="tituloId5">
            <h1 class="titulo">Quais são seus criadores de conteúdos fashion favoritos?</h1>
            <br>
            <div class="radios">
            <input  type="radio" name="imagem" id="u1" />
            <label class="fotoOp" for="u1"><img class="img-ops" src="../assets/13.png">Malu Borges</label>
            <input  type="radio" name="imagem" id="u2" />
            <label class="fotoOp" for="u2"><img class="img-ops" src="../assets/12.png">Catarina Tourino</label>
            <input type="radio" name="imagem" id="u3" />
            <label class="fotoOp" for="u3"><img class="img-ops" src="../assets/14.png">Matilda Djerf</label>
            <input type="radio" name="imagem" id="u4" />
            <label class="fotoOp" for="u4"><img class="img-ops" src="../assets/15.png">Livia Nunes</label>
            <input type="radio" name="imagem" id="u5" />
            <label class="fotoOp" for="u5"><img class="img-ops" src="../assets/11.png">Malufca</label>
            </div>
        </div> 

        </div>
        <a id="proximo1" onClick='proximo1()'>Proximo</a>
        <a id="proximo2" onClick='proximo2()'>Proximo</a>
        <a id="proximo3" onClick='proximo3()'>Proximo</a>
        <a id="proximo4" onClick='proximo4()'>Proximo</a>
        <a id="proximo5" href="fechar(); https://wa.me/5512997481018">Finalizar</a>
        </div>
    </div>


    <script>

function fechar(){
    document.getElementById("tituloId2").style.display="none";
    document.getElementById("tituloId3").style.display="none";
    document.getElementById("tituloId4").style.display="none";
    document.getElementById("tituloId5").style.display="none";
    document.getElementById("bolinha01").style.backgroundColor="#121212";
    document.getElementById("bolinha02").style.backgroundColor="#C3C2BF";
    document.getElementById("bolinha03").style.backgroundColor="#C3C2BF";
    document.getElementById("bolinha04").style.backgroundColor="#C3C2BF";
    document.getElementById("bolinha05").style.backgroundColor="#C3C2BF";
    document.getElementById("proximo1").style.display="block";
    document.getElementById("proximo2").style.display="none";
    document.getElementById("proximo3").style.display="none"
    document.getElementById("proximo4").style.display="none"
    document.getElementById("proximo5").style.display="none"
    document.getElementById("tituloId").style.display="block";
    document.getElementById('sec06').style.display='none';
}

function proximo1(){
            document.getElementById("tituloId2").style.display="block";
            document.getElementById("tituloId").style.display="none";
            document.getElementById("bolinha01").style.backgroundColor="#C3C2BF";
            document.getElementById("bolinha02").style.backgroundColor="#121212";
            document.getElementById("proximo2").style.display="block";
            document.getElementById("proximo1").style.display="none"  ;
    }

    function proximo2(){
            document.getElementById("tituloId3").style.display="block";
            document.getElementById("tituloId2").style.display="none";
            document.getElementById("bolinha02").style.backgroundColor="#C3C2BF";
            document.getElementById("bolinha03").style.backgroundColor="#121212";
            document.getElementById("proximo3").style.display="block";
            document.getElementById("proximo2").style.display="none";
    }

    function proximo3(){
            document.getElementById("tituloId4").style.display="block";
            document.getElementById("tituloId3").style.display="none";
            document.getElementById("bolinha03").style.backgroundColor="#C3C2BF";
            document.getElementById("bolinha04").style.backgroundColor="#121212";
            document.getElementById("proximo4").style.display="block";
            document.getElementById("proximo3").style.display="none";
    }

    function proximo4(){
            document.getElementById("tituloId5").style.display="block";
            document.getElementById("tituloId4").style.display="none";
            document.getElementById("bolinha04").style.backgroundColor="#C3C2BF";
            document.getElementById("bolinha05").style.backgroundColor="#121212";
            document.getElementById("proximo5").style.display="block";
            document.getElementById("proximo4").style.display="none";
    }

    function proximo5(){
            document.getElementById("tituloId5").style.display="none";
            document.getElementById("proximo6").style.display="block";
            document.getElementById("proximo5").style.display="none";
    }


    </script>