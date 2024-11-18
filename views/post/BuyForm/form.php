<?php $this->title=Yii::$app->name;?>

    <div class="App">
        <section>
            <div>
               <div class="section-header-ask-question-banner">
                  <div style=" display: flex; align-items: center; justify-content: center; flex-direction: column;">
                     <h1 class="title-question-page">Купівля товару</h1>
                     <h3 class="subtitle-question-page">Менеджери компанії з радістю дадуть відповіді на ваші <br> запитання і допоможуть з вибором.</h3>
                  </div>
                  <div class="section-ask-question-form">
         
                     <form class="form-ask-question formValidate" action="#" novalidate>
         
                        <label class="ask-question-form-title" for="name">Ваше ім'я:<span>*</span></label>
                        <input class="ask-question-form-input inputValidate" id="name" name="name" required type="text">
         
                        <label class="ask-question-form-title" for="phone">Телефон:<span>*</span></label>
                        <input class="ask-question-form-input inputValidate inputPhone" id="phone" name="phone" required type="tel">
         
                        <label class="ask-question-form-title" for="email">E-mail:</label>
                        <input class="ask-question-form-input  inputValidate inputEmail" id="email" name="email" type="email">
         
                        <label class="ask-question-form-title" for="goods">Товар, що цікавить / послуга:<span>*</span></label>
                        <select class="ask-question-form-input  inputValidate inputSelect" name="option" id="dropdown">
                            <option value="" selected disabled>Оберіть варіант</option>
                            <option value="Місячний план(пакет Silver)">Місячний план(пакет Silver)</option>
                            <option value="Місячний план(пакет Platinum)">Місячний план(пакет Platinum)</option>
                            <option value="Місячний план(пакет Gold)">Місячний план(пакет Gold)</option>
                            <option value="Купівля машини">Купівля машини</option>
                            <option value="Інший вид послуг">Інший вид послуг</option>
                        </select>
                        <label class="ask-question-form-title" for="message">Повідомлення:<span>*</span></label>
                        <input class="ask-question-form-input  inputValidate" id="message" name="message" required type="text">
         
                        <div style="display: flex; align-items: center; width: 100%; margin-top:15px;">
                           <input class="ask-question-form-checkbox  inputValidate inputCheckbox" id="checkbox" name="checkbox" required type="checkbox">
                           <label class="ask-question-form-title ask-ques-check-tit" for="checkbox">Я згоден на <span>обробку персональних даних</span></label>
                        </div>
         
                        <div class="section-form-btn">
                           <span>* Обов'язкове поле</span>
                           <button class="btn-form" type="submit">Відправити</button>
                        </div>
                        <div class="formMessage fr-messag"></div>
                     </form>
                     
                  </div>
               </div>
            </div>
         </section>
     </div>
<script>AOS.init();</script>
</body>
</html>