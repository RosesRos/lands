<style>
  .screenLock {
    position: fixed;
    width: 100%;
    background: rgba(0, 0, 0, 0.7) none repeat scroll 0% 0%;
    top: 0px;
    left: 0px;
    z-index: 99999;
    display: none;
  }
  
  .screenLock .msg {
    position: absolute;
    width: 90%;
    max-width: 750px;
    top: 90px;
    left: 0;
    right: 0;
    margin: auto;
    background: rgb(33, 167, 229) none repeat scroll 0% 0%;
    border: 7px solid rgb(238, 238, 238);
  }
  
  .screenLock .msg > h1 {
    color: rgb(255, 255, 255);
    text-align: center;
    font-size: 28px;
    margin: 20px auto;
  }
  
  .screenLock .msg .text {
    display: inline-block;
    vertical-align: middle;
    max-width: 59%;
    color: rgb(255, 255, 255);
    text-align: left;
    font-size: 22px;
    font-weight: bold;
    line-height: 120%;
  }
  
  .screenLock .image {
    display: inline-block;
    vertical-align: middle;
    max-width: 24%;
    margin-left: 50px;
      margin-right: 20px;
  }
  
  .screenLock .close {
    position: absolute;
    top: 1px;
    right: 15px;
    font-size: 40px;
    cursor: pointer;
  }
  
  .screenLock .submit {
    cursor: pointer;
    height: 75px;
    width: 400px;
    background-color: #ec3b3b;
    color: #ffffff;
    font-size: 30px;
    border-radius: 3px;
    margin: 20px auto;
    font-weight: bold;
  }
  
  .screenLock .submit:hover {
    background-color: #bb3d3d;
  }
  
  h1 {
    display: block;
    width: auto;
    line-height: 1.2;
    color: rgb(10, 10, 10);
    font-size: 23px;
  }
  
  h2 {
    display: block;
    line-height: 1.2;
    color: rgb(10, 10, 10);
    font-size: 19px;
    margin-top: 25px;
  }
  
  h2::after {
    content: "";
    margin-top: 25px;
    border-bottom: 4px solid rgb(22, 141, 226);
    display: block;
  }
  

  .content-left {
    display: block;
  }
  
  .content-left-social {
    display: block;
    width: 96%;
    background: rgb(238, 238, 238) none repeat scroll 0% 0%;
    padding: 1% 2%;
    margin: 15px 0px;
  }
  
  .content-left-social-comments {
    display: block;
    float: right;
    width: 50%;
    text-align: right;
    font-size: 13px;
  }
  
  .content-left-social::after {
    content: "";
    display: block;
    clear: both;
  }

  .content-left hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border-width: 1px 0px 0px;
    border-style: solid none none;
    border-color: rgb(238, 238, 238) currentcolor currentcolor;
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
}
  
  .content-left-doctor {
    display: block;
    width: 100%;
    background-color: rgb(226, 226, 226);
    padding: 2%;
    margin-top: 25px;
  }
  
  .content-left-doctor-foto {
    display: block;
    width: 48%;
    float: left;
    margin-right: 2%;
  }
  
  .content-left-doctor-foto img {
    width: 100%;
    display: block;
  }
  
  .content-left-doctor-text {
    display: block;
    width: 50%;
    float: right;
  }
  
  .content-left-doctor::after {
    content: "";
    display: block;
    clear: both;
  }
  
  .content-important {
    display: block;
    width: auto;
    text-align: left;
    font-weight: bold;
    font-style: italic;
  }
  
  .opros-product-block {
    display: block;
    width: auto;
    margin-top: 2%;
  }
  
  .like-block {
    display: block;
    width: 95.7%;
    border: 2px solid rgb(230, 230, 230);
    padding: 0px 2% 2%;
    margin: 3% 0px;
    border-radius: 3px;
  }
  
  .like-block img {
    display: block;
    width: auto;
  }
  
  .vk-container {
    text-align: left;
    font-family: tahoma, arial, verdana, sans-serif;
    font-size: 15px;
    color: black;
    text-decoration: none;
  }
  
  .vk-header {
    background: rgb(218, 226, 232) none repeat scroll 0% 0%;
    padding: 4px 4px 4px 6px;
    margin-bottom: 10px;
  }
  
  .vk-logo {
    background: transparent none no-repeat scroll 0% 0%;
    width: 16px;
    height: 16px;
    float: right;
    margin-top: -1px;
  }
  
  .vk-header-text {
    padding: 2px 3px 1px;
    line-height: 100%;
    color: rgb(69, 104, 142);
    font-weight: bold;
  }
  
  .content-right {
    display: block;
    width: 27%;
    float: right;
    position: relative;
  }
  .red {
    color: #f00;
  }
  .content-right-recommend-container {
    display: block;
    max-width: 270px;
    width: 100%;
  }
  
  .content-right-recommend {
    display: block;
    width: auto;
  }
  
  .content-right-recommend-top {
    height: 48px;
    background: rgb(74, 162, 36) none repeat scroll 0% 0%;
    font-weight: bold;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    line-height: 48px;
    position: relative;
    text-align: center;
    font-size: 12px;
  }
  
  .content-right-recommend-top::before {
    content: "";
    position: absolute;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 0px 17px 13px 0px;
    border-color: transparent rgb(74, 162, 36) transparent transparent;
    left: 0px;
    bottom: -13px;
  }
  
  .content-right-recommend-top::after {
    content: "";
    position: absolute;
    width: 0px;
    height: 0px;
    border-style: solid;
    border-width: 13px 17px 0px 0px;
    border-color: rgb(74, 162, 36) transparent transparent;
    right: 0px;
    bottom: -13px;
  }
  
  .content-right-recommend-middle {
    width: 86%;
    display: block;
    margin: auto;
    padding: 1% 1% 7%;
    text-align: center;
    background: rgb(255, 255, 255) none repeat scroll 0% 0%;
    text-decoration: none;
  }
  
  .content-right-recommend-middle img {
    display: block;
    max-height: 156px;
    margin: 7% auto;
  }
  
  .content-right-statistic {
    display: block;
    width: 96%;
    padding: 0px 2% 2%;
    background: rgb(243, 243, 243) none repeat scroll 0% 0%;
    color: rgb(81, 81, 81);
    margin-top: 5%;
  }
  
  .content-right-statistic-head {
    display: block;
    width: auto;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    margin-bottom: 1%;
  }
  
  .content-right-statistic-info {
    display: block;
    width: 100%;
    margin-bottom: 1%;
  }
  
  .content-right-statistic-info-left {
    display: block;
    float: left;
    width: 60%;
    text-align: left;
    font-size: 14px;
  }
  
  .content-right-statistic-info-right {
    display: block;
    float: left;
    width: 37%;
    font-size: 14px;
    margin-left: 3%;
    font-weight: bold;
    text-align: left;
  }
  
  .content-right-statistic-info::after {
    content: "";
    display: block;
    clear: both;
  }
  
  .content::after {
    content: "";
    display: block;
    clear: both;
  }
  
  .vote-block {
    width: auto;
    display: block;
    background: rgb(238, 239, 241) none repeat scroll 0% 0%;
    border-radius: 3px;
  }
  
  .vote-block-head {
    display: block;
    text-align: left;
    width: auto;
    padding: 15px 20px;
  }
  
  .vote-block-head h2 {
    color: #f00;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 18px;
    line-height: 25px;
    margin-top: 0px;
  }
  
  .vote-block-head span {
    font-size: 18px;
    color: rgb(0, 0, 0);
    text-transform: lowercase;
  }
  
  .vote-block-content {
    display: block;
    width: auto;
    border: 1px solid rgb(238, 239, 241);
    background: rgb(255, 255, 255) none repeat scroll 0% 0%;
    padding: 0px 20px;
    font-size: 14px !important;
  }
  
  .vote-block-content-container:first-child {
    margin-top: 30px;
  }
  
  .vote-block-content-container:last-child {
    margin-bottom: 40px;
  }
  
  .vote-block-content-container {
    display: block;
    width: auto;
    margin-bottom: 20px;
  }
  
  .vote-block-content-container::after {
    content: "";
    display: block;
    clear: both;
  }
  
  .vote-block-content-text {
    float: left;
    display: block;
    width: 40%;
    text-align: left;
  }
  
  .vote-block-content-stat {
    display: block;
    float: right;
    width: 60%;
    position: relative;
    background: rgb(238, 239, 241) none repeat scroll 0% 0%;
    height: 25px;
  }
  
  .vote-block-content-stat-line {
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 35%;
    height: 100%;
    background: rgb(102, 160, 29) none repeat scroll 0% 0%;
    text-align: right;
  }
  
  .vote-block-content-stat-line h6 {
    font-size: 12px;
    color: rgb(238, 239, 241);
    margin-left: 121%;
    margin-top: 4px;
  }
  
  .line-1 {
    width: 23%;
    background: rgb(102, 160, 29) none repeat scroll 0% 0%;
  }
  
  .line-2 {
    width: 47%;
    background: rgb(102, 160, 29) none repeat scroll 0% 0%;
  }
  
  .line-3 {
    width: 8%;
    background: rgb(102, 160, 29) none repeat scroll 0% 0%;
  }
  
  .line-4 {
    width: 17%;
    background: rgb(147, 149, 152) none repeat scroll 0% 0%;
  }
  
  .line-5 {
    width: 5%;
    background: rgb(147, 149, 152) none repeat scroll 0% 0%;
  }
  
  .line-1 h6 {
    color: rgb(102, 160, 29);
  }
  
  .line-2 h6 {
    color: rgb(102, 160, 29);
    margin-left: 108%;
  }
  
  .line-3 h6 {
    color: rgb(102, 160, 29);
  }
  
  .line-4 h6 {
    color: rgb(147, 149, 152);
  }
  
  .line-5 h6 {
    color: rgb(147, 149, 152);
  }
  
  <style > #created-button-1 {
    line-height: 1.7em !important;
  }
  
  a:active,
  a:focus {
    outline: 0;
  }
  
  :focus {
    outline: 0;
  }
  
  button:active,
  button:focus {
    outline: 0 !important;
  }
  
  button::-moz-focus-inner {
    border: 0 !important;
  }
  
  .myh2 {
    display: block;
    line-height: 1.2;
    color: #0a0a0a;
    margin-top: 25px;
    -webkit-margin-before: 0.83em;
    -webkit-margin-after: 0.83em;
    -webkit-margin-start: 0;
    -webkit-margin-end: 0;
    font-weight: 700;
  }
  
  .article-heading {
    margin: 25px 0;
    text-align: center;
  }
  
  .align-left {
    text-align: left;
  }
  
  .article-link {
    text-decoration: none;
  }
  
  .article-link:hover {
    text-decoration: underline;
  }
  
  .center {
    text-align: center;
  }
  
  .product-pic {
    display: block;
    margin: 0 auto;
    max-height: 383px;
  }
  
  .share-picture {
    cursor: pointer;
    display: block;
    margin: 0 auto;
  }
  
  .vk-comment,
  .vk-comment-load {
    margin-bottom: 15px;
    position: relative;
    border-bottom: 1px solid rgb(218, 225, 232);
    padding-bottom: 15px;
  }
  
  .vk-avatar img {
    float: left;
    margin-right: 10px;
  }
  
  .vk-comment-name {
    color: rgb(43, 88, 122);
    font-weight: bold;
    font-size: 12px;
  }
  
  .vk-comment-text {
    margin-left: 60px;
  }
  
  .vk-comment-date {
    margin-left: 60px;
    color: rgb(153, 153, 153);
  }
  
  .content-right {
    display: block;
    width: 27%;
    float: right;
    position: relative;
  }
  
  .bottom-btn-wrap {
    text-align: center;
  }
  
  .bottom-btn {
    display: inline-block;
    margin: 20px auto;
    padding: 20px;
    font-size: 20px;
    font-weight: 700;
    text-decoration: none;
    background-color: #de0606;
    text-align: center;
    color: #fff !important;
    border-radius: 4px;
    border: none;
    cursor: pointer;
  }
  
  .bottom-btn:hover {
    opacity: 0.8;
  }
  
  @media screen and (max-width: 1199px) {
    .content-right {
      display: none;
    }
  
    .content-left {
      width: 100%;
      padding-right: 0px;
    }
  }
  
  @media screen and (max-width: 989px) {

  
    .like-block {
      margin: 5% 0px;
    }
  }
  
  @media screen and (max-width: 720px) {
    .content-left-social-comments {
      font-size: 2.8vw;
    }
  
    .screenLock {
      display: none !important;
    }
  }
  
  @media screen and (max-width: 599px) {
    .content-left-doctor-foto {
      float: none;
      width: 100%;
    }
  
    .content-left-doctor-text {
      float: none;
      width: 100%;
      margin-top: 3%;
    }
  }
  
  @media screen and (max-width: 429px) {
    .like-block img {
      width: 100%;
    }
  }
  
</style>

<div class="content-left">
   <h1>
      <center><b> ¡LOS DIABÉTICOS SE PUDREN POR DENTRO Y MUEREN DE AGONÍA! </b></center>
      <br>
      <center style="max-width:630px;margin:0 auto"><b> ¡La única causa de la diabetes es la falta de potasio en el cuerpo! </b></center>
      <br>
      <center><b> Estabilizar los niveles de azúcar en la sangre y completar un <span style="color: #f00"> tratamiento </span> eficaz de la diabetes es la mejor forma de prevenir esta enfermedad y evitar la muerte. </b></center>
   </h1>
   <h2> La diabetes afectará inevitablemente a los órganos internos y conducirá a una muerte lenta.&nbsp;El 78% de los diabéticos muere a causa de las complicaciones de esta enfermedad. </h2>
   <h2 style="color: #f00"> Dr. Tomás Borda: "Yo misma comprobaré que cada persona que pida nuestro producto para la diabetes y la estabilización de los niveles de azúcar en la sangre lo reciba a un precio especial". </h2>
   <div class="content-left-doctor">
      <img src="img/doctor.jpeg">
      <div class=""><strong> Tus preguntas son respondidas por <br> Dr. Tomás Borda <br></strong>
         <br>Especialista del Departamento de Endocrinología.&nbsp;Médico que ha salvado miles de vidas.&nbsp;Especialista en el tratamiento de la diabetes en América Latina.
         <br>
         <br>Experiencia laboral: más de 15 años.
      </div>
   </div>
   <br>
   <p><i> "No escuchéis a nadie, ya que solo hay una verdad: es posible curar la diabetes y estabilizar los niveles de azúcar en la sangre de una vez por todas a cualquier edad y en cualquier etapa de la enfermedad". </i>
   </p>
   <div class="align-left">
      <h2 class="red article-heading"> "En América Latina, hemos lanzado un programa que permite obtener nuestro producto para la diabetes a un precio especial". </h2>
      <p>Hace un mes, se puso en marcha el programa "América Latina sin diabetes" que tiene como objetivo combatir la diabetes y sus complicaciones.&nbsp;Recibimos muchas preguntas al respecto y decidimos publicar una entrevista con la coordinadora del programa, Dr. Tomás Borda.&nbsp;Es una especialista de renombre que dirigió personalmente el programa y supervisó su avance para evitar la corrupción.&nbsp;Os recordamos que el programa se lanzó oficialmente a finales de <span class="prev_month"><span> agosto </span></span> .&nbsp;Gracias al programa, todos los residentes del país pueden obtener el producto más novedoso para la diabetes <a class="article-link red" href="#"> a un precio especial </a> .&nbsp;El envío está disponible para toda América Latina.</p>
      <p><b> Editor: Hola Dr. Tomás Borda, ¿por qué fue necesario lanzar este programa financiado por organizaciones médicas privadas?&nbsp;¿Las clínicas y los hospitales públicos ya no pueden ocuparse del tratamiento de los diabéticos? </b>
      </p>
      <p><b> Dr. Tomás Borda: </b> ¡Hola!&nbsp;Nuestro sistema de salud es muy burocrático.&nbsp;Tiene un mecanismo enorme, con muchos problemas.&nbsp;Por supuesto que las clínicas y los hospitales tratan a los diabéticos, pero, desafortunadamente, los especialistas de allí se enfocan principalmente en mantener el cuerpo en un estado estable y solo combatir los efectos de la enfermedad.&nbsp;Debemos entender que las dietas especializadas, la insulina y los medicamentos de mantenimiento solo crean la ilusión de una vida normal.&nbsp;La enfermedad en sí no se ve afectada en absoluto.&nbsp;El diabético sigue muriendo lentamente.</p>
      <p>Como resultado, muchos diabéticos no reciben el tratamiento y la ayuda adecuados, aunque la diabetes es una enfermedad no menos peligrosa que los tumores malignos en términos de tasas de mortalidad.</p>
      <p><b> Editor: ¿Quiere decir que las tasas de riesgo de cáncer y diabetes son comparables? </b>
      </p>
      <p><b> Dr. Tomás Borda: </b> No solo eso.&nbsp;De hecho, son muy similares si miramos el porcentaje de la tasa de mortalidad.&nbsp;La única diferencia es que la diabetes mata más lentamente, pero la tasa de mortalidad de los diabéticos se diferencia un poco de la tasa de mortalidad de los pacientes con cáncer.&nbsp;Mientras que una persona con un tumor maligno recibe un tratamiento activo, el tratamiento para los diabéticos se limita, en general, a intentar que los pacientes sigan dietas especializadas y se hagan inyecciones de insulina.&nbsp;Incluso si a los diabéticos se les da algún tratamiento, como comprenderéis, la mayoría de las veces no se tratan en el sentido más estricto como expliqué anteriormente.</p>
      <p>Dado que el número de diabéticos en el mundo está aumentando muy rápidamente, la enfermedad causa muchas muertes.</p>
      <img src="img/ded.jpg" alt="">
      <p><strong> Editor: ¿Pero cómo puede la diabetes causar la muerte?&nbsp;En el caso del cáncer está claro, pero, ¿qué consecuencias tiene para los diabéticos? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> En primer lugar, están las complicaciones clásicas de la diabetes: coma diabético, necrosis de las extremidades, gangrena, pérdida de visión, impotencia, cetoacidosis, hipoglucemia.&nbsp;Normalmente, aparecen durante el desarrollo de la diabetes y, en la mayoría de los casos, son fatales.&nbsp;Si analizamos este asunto con más detenimiento, las complicaciones son:</p>
      <p style="margin-bottom:-15px;font-weight:600;font-size:18px">Cetoacidosis</p>
      <p><u> Efectos </u> : pérdida de conciencia, interrupción repentina de la actividad de los órganos vitales.&nbsp;Muerte.</p>
      <p style="margin-bottom:-15px;font-weight:600;font-size:18px">Hipoglucemia</p>
      <p><u> Efectos </u> : pérdida del conocimiento, aumento repentino de los niveles de azúcar en la sangre en poco tiempo, falta de reacción a la luz, transpiración aguda y convulsiones.&nbsp;La forma extrema es el coma.</p>
      <p style="margin-bottom:-15px;font-weight:600;font-size:18px">Coma hiperosmótico</p>
      <p><u> Efectos </u> : polidipsia (sed excesiva), poliuria (micción excesiva).</p>
      <p style="margin-bottom:-15px;font-weight:600;font-size:18px">Coma lactocidótico</p>
      <p><u> Efectos </u> : pérdida del conocimiento, problemas respiratorios, bajada de la presión arterial y falta de micción, además de trastornos cardiovasculares.</p>
      <p><strong> Editor: ¿Eso es todo? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Estas son solo algunas de las complicaciones que pueden aparecer unos meses después del desarrollo de la enfermedad.&nbsp;En 2-3 años, pueden ocurrir otras complicaciones como:</p>
      <p>1. Retinopatía. Es una lesión de la retina ocular que puede provocar una hemorragia en la parte posterior del ojo y el desprendimiento de la retina.&nbsp;Puede conducir gradualmente a la pérdida total de la visión.&nbsp;Con mayor frecuencia, la retinopatía aparece en pacientes con diabetes tipo 2.&nbsp;El paciente quedará completamente ciego.</p>
      <p>2. Angiopatía. Reduce drásticamente la permeabilidad de los vasos sanguíneos y los hace frágiles.&nbsp;Existe una tendencia a la trombosis y la aterosclerosis.&nbsp;En cualquier momento pueden aparecer hemorragias internas o hemorragias cerebrales.</p>
      <p>3. Polineuropatía.&nbsp;Es la pérdida de sensibilidad al dolor y al calor en las extremidades.&nbsp;Con mayor frecuencia se desarrolla como síndrome de los "guantes y calcetines", siendo visible simultáneamente en las extremidades inferiores y superiores.&nbsp;Los primeros síntomas son el entumecimiento y la sensación de ardor en las extremidades que se intensifican durante la noche.&nbsp;Conduce a la pérdida de control sobre las extremidades.</p>
      <p>4. Pierna diabética.&nbsp;Es una complicación en la que las extremidades inferiores de un paciente con diabetes presentan ulceraciones abiertas, llagas purulentas, áreas necróticas (muertas).&nbsp;Conduce a la amputación o la muerte.</p>
      <img src="img/66.jpeg" alt="">
      <p><strong> Editor: ¿Qué opciones tienen los diabéticos?&nbsp;Parece que las clínicas son inútiles, pero la enfermedad hay que tratarla de alguna manera... </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Estoy de acuerdo, la situación parece desesperada a primera vista, y esta la razón principal por la que lanzamos el programa. Ahora cualquiera puede obtener un producto fuerte para la diabetes a un precio especial que eliminará todas las barreras para los diabéticos, incluidas las burocráticas.</p>
      <p><strong> Editor: ¿Podría darnos más información sobre esto? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Veréis, lo único realmente necesario y que los medicamentos antiguos no pueden ofrecer, ni siquiera los destinados al tratamiento de esta enfermedad, es una restauración completa de la función pancreática que permitirá absorber la insulina producida por el propio organismo.&nbsp;Sin ayuda del exterior.&nbsp;La mayoría de los medicamentos existentes (incluso los mejores) solo intentan mejorar la condición del paciente, aumentando artificialmente sus niveles de azúcar en la sangre y considerando que, para tratar completamente la diabetes, se debe restaurar la función del páncreas.&nbsp;Esto era imposible de lograr con los fármacos antiguos.</p>
      <p>Según los estudios más recientes, lo único que hay que hacer para restaurar la función del páncreas es recuperar los niveles de potasio en la sangre.&nbsp;La falta aguda de potasio provoca que el páncreas deje de absorber la insulina producida por el propio organismo.&nbsp;El problema de recuperar los niveles de potasio es muy difícil porque el "potasio 12" es imposible de mantener en una forma lista para ser adminisitrada.&nbsp;La única opción es elegir componentes que reaccionarán dentro del cuerpo humano y formarán el componente necesario dentro de él.</p>
      <p>Los ensayos clínicos del nuevo producto demostraron que se ocupa muy bien de esta tarea.&nbsp;En total, participaron 10.120 personas de diversos grupos de edad y etapas de la diabetes.&nbsp;El 93,8% de ellos estabilizó por completo los niveles de azúcar en la sangre.&nbsp;El 5,6% todavía tiene algunos problemas, pero su estado general de salud mejoró significativamente.&nbsp;Por lo general, las personas que tenían una etapa severa de la diabetes y estaban cerca de la muerte, solo experimentaron pequeñas recaídas periódicas de los niveles anormales de azúcar en la sangre después del tratamiento con este producto.&nbsp;Y solamente el 0,6% de ellos experimentó una mejora sustancial que se consideró insuficiente para afirmar una recuperación completa.</p>
      <p><strong> Editor: ¿Qué tipo de producto es? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Estoy hablando del nuevo desarrollo llamado <a class="article-link red" href="#"> Gluco PRO </a> . Es un producto que permite, en el menor tiempo posible, en unos 4 días, deshacerse por completo de las fluctuaciones de azúcar en la sangre y, en 2-3 meses, restaurar por completo la función del páncreas.</p>
      <p>Este producto es producido por una empresa internacional utilizando altas tecnologías y su desarrollo llevó 2 años.&nbsp;Por eso podemos distribuir Gluco PRO a un precio especial en el Tomás del programa que comenzó hace poco para toda la población latinoamericana.</p>
      <p><strong> Editor: ¿Cómo funciona este milagroso producto? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> No es un milagro, solo ciencia pura.&nbsp;Este producto recupera los niveles de potasio y, al mismo tiempo, genera células inmunes especiales "reprogramadas" que desencadenan el proceso de recuperación del páncreas, restaurando su función.&nbsp;El páncreas comienza a absorber la insulina producida por el cuerpo humano, lo que elimina la causa de la diabetes en sí.&nbsp;Como resultado, después de un ciclo de tratamiento, los niveles de azúcar en la sangre se estabilizan por completo.</p>
      <p><strong> Editor: ¡Suena impresionante!&nbsp;Una cosa: ¿qué significa esto para la población? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Significa que la medicina latinoamericana moderna es cada vez más avanzada y que es posible curar la diabetes en 2-3 meses.&nbsp;Gluco PRO no solo alivia los síntomas estabilizando temporalmente el azúcar en sangre, sino que también "reinicia" el cuerpo a nivel celular.&nbsp;Este producto elimina la causa de la diabetes y el paciente recupera su salud.&nbsp;No solo se libra de los síntomas, sino que además se deshace de la causa de la enfermedad.</p>
      <p><strong> Editor: ¿Gluco PRO solo puede ayudar en las primeras etapas de la enfermedad? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> No, como ya dije antes, actúa a nivel celular, restaurando el cuerpo del paciente.&nbsp;Trata cualquier etapa de la diabetes, hasta los casos más graves cuando la etapa agravada de la enfermedad acerca al paciente a la muerte.</p>
      <p><strong> Editor: ¿Elimina realmente la causa de la enfermedad y no solo estabiliza los nivel de azúcar en la sangre? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Gluco PRO estabiliza los niveles de azúcar en la sangre en los primeros días de tratamiento (debido a la recuperación parcial de la función pancreática) y elimina por completo la enfermedad después de completar el ciclo de tratamiento.&nbsp;Actualmente, es la única solución que realmente puede curar la diabetes.</p>
      <div class="center">
         <img alt="" class="product-pic" src="prod" style="max-width:60%; width: auto">
      </div>
      <p><strong> Editor: ¿Cómo se puede obtener Gluco PRO mediante el programa?&nbsp;¿Lo puede obtener cualquier persona? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Sí, cualquier persona puede obtenerlo.&nbsp;Solo hay un "pero": debido al bajo nivel de producción, la implementación del programa es limitada, pero os aseguro que todo el mundo puede dejar una solicitud y llevarse el té de hierbas Gluco PRO a un precio especial.&nbsp;Simplemente hay que completar la solicitud y dejar vuestro nombre y número de teléfono para que se comuniquen con vosotros.&nbsp;Un agente del centro de llamadas se pondrá en contacto con vosotros lo antes posible para aclarar todos los detalles.</p>
      <p><strong> Editor: ¿Cuándo terminará el programa? </strong>
      </p>
      <p>
         <b> Dr. Tomás Borda: </b> La fecha límite del programa es: 
         <span class="red">
         <script>
            var today = new Date();
            let date = today.getDate()+'.'+(today.getMonth()+1) +'.'+today.getFullYear();
            
            document.write(date)
         </script>
         </span>
         (inclusive).&nbsp;Deberéis <a class="article-link red" href="#"> pedir Gluco PRO </a> antes de ese momento.&nbsp;Si aún no lo habéis hecho, os recomiendo que os deis prisa porque más adelante será imposible obtener Gluco PRO a un precio especial.&nbsp;Yo, personalmente, garantizo que las solicitudes realizadas antes de la fecha límite serán procesadas y que todos los que hayan realizado su pedido recibirán el producto.
      </p>
      <div>
         <p>Quiero llamar vuestra atención sobre los resultados de esta encuesta en la que participaron los pacientes de una clínica con diabetes de diversa gravedad.</p>
         <div class="vote-block">
            <div class="vote-block-head">
               <h2>
                  Encuesta: <!--Al Ministerului Sănătății:--><span> ¿Cómo curó la diabetes y estabilizó los niveles de azúcar en la sangre? </span>
               </h2>
            </div>
            <div class="vote-block-content">
               <div class="vote-block-content-container">
                  <div class="vote-block-content-text">Fármacos:</div>
                  <div class="vote-block-content-stat">
                     <div class="vote-block-content-stat-line line-1">
                        <h6> 23% </h6>
                     </div>
                  </div>
               </div>
               <div class="vote-block-content-container">
                  <div class="vote-block-content-text">Gluco PRO:</div>
                  <div class="vote-block-content-stat">
                     <div class="vote-block-content-stat-line line-2">
                        <h6> 47% </h6>
                     </div>
                  </div>
               </div>
               <div class="vote-block-content-container">
                  <div class="vote-block-content-text">Medicina tradicional:</div>
                  <div class="vote-block-content-stat">
                     <div class="vote-block-content-stat-line line-3">
                        <h6> 8% </h6>
                     </div>
                  </div>
               </div>
               <div class="vote-block-content-container">
                  <div class="vote-block-content-text">Sigo buscando una solución:</div>
                  <div class="vote-block-content-stat">
                     <div class="vote-block-content-stat-line line-4">
                        <h6> 17% </h6>
                     </div>
                  </div>
               </div>
               <div class="vote-block-content-container">
                  <div class="vote-block-content-text">No creo que sea posible:</div>
                  <div class="vote-block-content-stat">
                     <div class="vote-block-content-stat-line line-5">
                        <h6> 5% </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <p><strong> Editor: Dr. Tomás Borda, ¡muchas gracias por la entrevista!&nbsp;¿Quiere decirles algo más a nuestros lectores antes de despedirse? </strong>
      </p>
      <p><b> Dr. Tomás Borda: </b> Sí, por supuesto.&nbsp;No subestiméis vuestra enfermedad.&nbsp;Es muy peligroso y puede ser fatal.&nbsp;No debéis esperar hasta quedaros ciegos, entrar en coma o amputar vuestras extremidades.&nbsp;Es mejor resolver el problema antes de que sea demasiado tarde.</p>
      <hr>
      <!-- <img style="max-width: 100%;" src="img/tvdoc.jpg" alt="">  <hr> -->
      <script>
        let months = {
            'es': ["enero", "febrero", "marzo ", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"],
            'de': ["Januar", "Februar", "März ", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
            'bg': ["януари", "февруари", "март ", "април", "май", "юни", "юли", "август", "септември", "октомври", "ноември", "декември"],
            'cz': ["leden", "únor", "březen ", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec"],
            'it': ["gennaio", "febbraio", "marzo", "aprile", "maggio", "giugno", "luglio", "agosto", "settembre", "ottobre", "novembre", "dicembre"],
            'ro': ["ianuarie", "februarie", "martie", "aprilie", "mai", "iunie", "iulie","august", "septembrie", "octombrie",  " noiembrie", "decembrie"],
            'pl': ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"],
            'hu': ["január", "február", "március", "április", "május", "június", "július", "augusztus", "szeptember", "október", "november", "december"],
          }
        let monthNow
        function getMonthLang(lang) {
          let date = new Date();
          let month = date.getMonth();
          // if (date.getMonth() == 11) {
          var current = new Date(date.getFullYear(), date.getMonth() + 1, 1);
          let month1 = current.getMonth();
          monthsArray = months[lang];
          monthNow = monthsArray[month];
          monthNow1 = monthsArray[month1];
        }

        getMonthLang('es');
        
      </script>
      <div class="content-important"><span class="red"> ¡Atención! </span> Se ha llegado a la conclusión de que <span class="text_month red"><span> <script>
        document.write(monthNow); 
      </script> </span></span> y <span class="next_month red"><span> <script>document.write(monthNow1); </script> </span></span> son los mejores meses para comenzar el tratamiento de la diabetes.&nbsp;Debido a la estabilización de la temperatura promedio, se acelera el metabolismo, aumenta la circulación de la sangre en el cuerpo, así como el flujo de sangre y oxígeno en los órganos internos, por lo que aumenta el efecto del uso de Gluco PRO.&nbsp;El tratamiento para la diabetes y sus complicaciones se produce un 67% más rápido de lo que hubiera sido en otras épocas del año.&nbsp;La restauración de las funciones del cuerpo se lleva a cabo al 100% durante todo el ciclo de tratamiento.</div>
      
    </div>
</div>
<br><br>