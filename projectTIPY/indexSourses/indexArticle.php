<!-- 
    Контент главной страницы, карты
-->

<link href="../includes/styles.css" rel="stylesheet">
<hr class="main"><br>
<article class="main">
    <section name="cards">
        <table class="main">    
            
            <tr>
                <td colspan="3">
                    <div class="card">
                        <form method="get" action="card.php">   
                            <div class="cardContent"> 
                                <button 
                                        type="submit" 
                                        name="cardID" 
                                        value="1"
                                        class="cardSubmitBtn textStyle">
                                    <h2>Введение</h2>
                                    <img src="txt.jpg" alt=""/>
                                    <p>
                                        Вы всегда хотели построить робота или написать собственный аналог фейсбука для общения с друзями? Замечательне время начать!
                                    </p>

                                </button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="card">
                        <form method="get" action="card.php">   
                            <div class="cardContent"> 
                                <button 
                                        type="submit" 
                                        name="cardID" 
                                        value="1"
                                        class="cardSubmitBtn textStyle"
                                        disabled>
                                    <h2>Необходимые элементы математики</h2>
                                    <img src="txt.jpg" alt=""/>
                                    <p>
                                        Думаете, что математика это скучно? На самом деле, если вы так дамете, то вам никогда не удавалось ее увидеть!
                                    </p>
                                </button>
                            </div>
                        </form>
                    </div>
                </td>
                
                <td>
                    <div class="card">
                        <form method="get" action="card.php">   
                            <div class="cardContent"> 
                                <button 
                                        type="submit" 
                                        name="cardID" 
                                        value="1"
                                        class="cardSubmitBtn textStyle"
                                        disabled>
                                    <h2>Проектирование программных проектов</h2>
                                    <img src="txt.jpg" alt=""/>
                                    <p>
                                        Как сложный организм состоит из активных взаимодействующих клеток, так и сложная программа состоит из активных  взаимодействующих  компонентов. 
                                    </p>

                                </button>
                            </div>
                        </form>
                    </div>
                </td>
                
                <td>
                    <div class="card">
                        <form method="get" action="card.php">   
                            <div class="cardContent"> 
                                <button 
                                        type="submit" 
                                        name="cardID" 
                                        value="1"
                                        class="cardSubmitBtn textStyle"
                                        disabled>
                                    <h2>Программируемые системы</h2>
                                    <img src="txt.jpg" alt=""/>
                                    <p>
                                        Где есть программы? Да практически везде, начиная от персональных компьютеров, заканчивая микросхемами на электронных зубных щетках. 
                                    </p>

                                </button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
            
        </table>
    </section>
    <section name="aboutUs">
        <!-- <hr>
        empty until 100 active users-->     
    </section>
    <section name="comments">
        <!--<hr>
        empty until 100 active users-->   
    </section>
</article>
