<style>
/*   .comment_header {
    text-align: center;
    font-size: 2rem;
    margin: 40px 0 30px 0;
  } */

  .wrapp_comment_input {
    border-top: solid 1px rgba(128, 128, 128, 0.3);
    border-bottom: solid 1px rgba(128, 128, 128, 0.3);
    padding: 20px 0;
  }

  .comment_input {
    display: flex;
    height: 40px;
    width: 100%;
  }

  .comment_input>img {
    border-radius: 100%;
  }

  .comment_text_input {
    width: 100%;
    padding: 10px 20px;
    border-radius: 20px;
    border: solid 1px grey;
    margin-bottom: 10px;
    margin-top: 10px;
  }

  .comment_button {
    border-radius: 5px;
    padding: 10px;
    border: solid 1px grey;
    color: black;
    cursor: pointer;
    background-color: #EFEFEF;
  }

  .comment_input>button:active {
    -webkit-box-shadow: inset 0px 0px 33px -17px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: inset 0px 0px 33px -17px rgba(0, 0, 0, 0.75);
    box-shadow: inset 0px 0px 33px -17px rgba(0, 0, 0, 0.75);
  }

  /* block comments start */
/*   .wrapp_comments {
    margin-top: 20px;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: repeat(auto-fit, minmax(100px, auto));
    align-items: center;
  }

  .comments_item {
    display: flex;
    margin-bottom: 5px;
  }

  .comment_images {
    justify-self: end;
    margin-right: 10px;
  }

  .comment_images>img {
    width: 40px;
    height: 40px;
    border-radius: 100%;
  }

  .emoji_evaluation {
    position: relative;
    width: 53px;
    background-color: white;
    right: 14px;
    bottom: 10px;
    display: flex;
    align-items: center;
    align-self: flex-end;
    border-radius: 15px;
    padding: 5px;
    margin-left: -2px;
    z-index: 99;
    -webkit-box-shadow: 4px 4px 9px -4px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 4px 4px 9px -4px rgba(0, 0, 0, 0.4);
    box-shadow: 4px 4px 9px -4px rgba(0, 0, 0, 0.4);
  }

  .emoji_evaluation>img {
    width: 17px;
    height: 17px;
    margin-left: 2px;
  }

  .emoji_evaluation>p {
    font-size: 11px;
    margin: 0 0 0 2px;
    opacity: .6;
  }

  .comment_text_wrapp {
    background-color: #EBEDF1;
    border-radius: 20px;
    height: 100%;
    padding: 15px 25px 15px 15px;
  }

  .person_name>p {
    color: #7484A7;
    margin: 0;
    font-size: 13px;
  }

  .comments_text {
    max-width: 400px;
    width: 100%;
    display: flex;
    flex-direction: column;
  }

  .comments_text>p {
    margin: 5px 0 0 0;
    font-size: 14px;
    line-height: 1.3em;
    font-family: Arial, Verdana, Georgia, Tahoma, Roboto;
  }

  .evaluation_unit {
    display: flex;
    justify-content: flex-start;
    align-self: end;
    grid-column: 2/4;
    margin-left: 37px;
  }

  .evaluation_unit>p {
    margin-top: 5px;
    margin-left: 20px;
    font-size: 14px;
    opacity: .6;
    display: inline;
  }

  .comments_text>img {
    margin-top: 10px;
  }

  .first_response {
    margin: 15px 0 0px 68px;
  }

  .second_response {
    margin: 15px 0 0px 136px;
  }

  .comments_indent {
    margin-top: 60px;
  }

  .comments_text>img {
    width: 100%;
  } */

  /* block comments end */
/*   .comments_text {
    display: flex;
  } */

  .comment_form {
    display: flex;
    margin-left: 15px;
    width: 100%;
    align-items: center;
  }

  .width_input_comment {
    width: 90%;
  }

  .margin_button_comment {
    margin-left: 15px;
  }

  .new_comments_list {
    display: flex;
    flex-direction: column-reverse;
    padding-left: 0;
    list-style: none;
  }
</style>
<div class="wrapp_comment_input">
  <div class="container">
    <div class="row">
      <div>
        <form class="comment_input">
          <!-- <img src="assets/photo_plug.png" alt="photo plug"> -->
          <div class="comment_form">
            <div class="width_input_comment">
              <textarea class="comment_text_input" type="text" id="comment-body" placeholder="votre commentaire"></textarea>
            </div>
            <div class="margin_button_comment">
              <button class="comment_button" type="submit" id="comment-add">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div>
  <ul class="new_comments_list" id="comment-field"></ul>
</div>
<script>

  let comments = [];
  loadComments();
  document.getElementById('comment-add').onclick = function(event) {
    event.preventDefault(); // Отменить стандартное действие кнопки
    let commentBody = document.getElementById('comment-body');
    let comment = {
      body: commentBody.value,
      time: Math.floor(Date.now() / 1000)
    }
    commentBody.value = '';
    comments.push(comment);
    saveComments();
    showComments();
  }

  function saveComments() {
    localStorage.setItem('comments', JSON.stringify(comments));
  }

  function loadComments() {
    if (localStorage.getItem('comments')) comments = JSON.parse(localStorage.getItem('comments'));
    showComments();
  }

  function showComments() {
    let commentField = document.getElementById('comment-field');
    let out = '';
    comments.forEach(function(item) {
      out += `
		<li>
            <div class="detRating jsDetRating ">
                <div class="infoCli">
                <div class="title">
                    <span class="bold">Incognito</span>
                </div>
                <div class=" sta N stN1 ratingPosition">
                    <img src="https://www.cdiscount.com/RWD/px.gif" height="17" width="100" alt="">
                </div>
                <div class="displayBadge">
                    <span class="achatCert">Achat vérifié</span>
                    <span>
                    <svg class="c_svg_check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <path d="M 89.122 3.486 L 89.122 3.486 c -2.222 -3.736 -7.485 -4.118 -10.224 -0.742 L 33.202 59.083 c -1.118 1.378 -3.245 1.303 -4.262 -0.151 L 17.987 43.291 c -3.726 -5.322 -11.485 -5.665 -15.666 -0.693 l 0 0 c -2.883 3.428 -3.102 8.366 -0.533 12.036 L 24.206 86.65 c 2.729 3.897 8.503 3.89 11.222 -0.014 l 6.435 -9.239 L 88.87 10.265 C 90.28 8.251 90.378 5.598 89.122 3.486 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(6,188,66); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    </span>
                </div>
                <p>${item.body}</p>
                <div class="ratingPublishBy">
                    <span class="ratingPseudo" itemprop="author">thib137</span>
                    <span class="ratingPublishDetails"> • 15/09/2023, testé le 15/09/2023</span>
                    <span class="reportedIcon"></span>
                    <span class="reported jsReported">Merci pour votre signalement</span>
                </div>
                <div class="ratSocial jsRatSocial">
                    <div>Cet avis est-il utile ?</div>
                    <div class="jsYesRat yesNoRat" data-external="" data-review="159854727" data-review-result="Merci ! (1 personne pense comme vous)"><span class="like-button">Oui</span> (<span class="like-count">1</span>)
                    </div>
                    <div class="jsNoRat yesNoRat" data-external="" data-review="159854727" data-review-result="Merci ! (1 personne pense comme vous)"><span class="like-button">Non</span> (<span class="like-count">1</span>)
                    </div>
                    <span class="jsRatRelevanceValidated fpRatRelevanceValidated"></span>
                </div>
                </div>
                <br class="fix">
            </div>
		</li>`;
    });
    commentField.innerHTML = out;
  }
</script>
