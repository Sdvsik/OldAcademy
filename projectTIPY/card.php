<!-- доделать -->
<!DOCTYPE html>
<html>
    <head>
        <link href="includes/styles.css" rel="stylesheet">
        <style>
            .module {
                background: 
                    linear-gradient(60deg, white, blue);
                margin: 0 auto;
                border-radius: 5pt;
                padding: 5px;
                width: 100%;
            }
            .status {
                border-radius: 10pt;
                background-color: white;
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <table class="main"> 
            <tr>
                <td width=80%>
                    <form method="get" action="module.php">
                        <button 
                                class="module" 
                                type="submit" 
                                name="modID"
                                value="1">
                            <h1>Модуль 1</h1>
                            <p>Из этого модуля вы узнаете, как работать с нашим ресурсом, о его принципиальных отличиях от его аналогов.</p>
                        </button>
                    </form>
                </td>
                <td width=9% class="status">
                    <img src="images/key.jpg">
                </td>
            </tr>
            <tr>
                <td width=80%>
                    <form method="get" action="">
                        <button 
                                class="module" 
                                type="submit" 
                                name="modID"
                                value="1"
                                disabled>
                            <h1>Модуль 2</h1>
                            <p> В этом модуле вы научитесь... Считать. Да, вы вероятно думаете, что владеете этим простым навыком.</p>
                        </button>
                    </form>
                </td>
                <td width=9% class="status">
                    <img src="images/1.png">
                </td>
            </tr>
            <tr>
                <td width=80%>
                    <form method="get" action="">
                        <button 
                                class="module" 
                                type="submit" 
                                name="modID"
                                value="1"
                                disabled>
                            <h1>Модуль 3</h1>
                            <p> В этом модуле мы расскажем вам еще об одном необходимом примитивном, как вы скорее всего подумаете, навыке - чтении.</p>
                        </button>
                    </form>
                </td>
                <td width=9% class="status">
                    <img src="images/1.png">
                </td>
            </tr>
            <tr>
                <td width=80%>
                    <form method="get" action="">
                        <button 
                                class="module" 
                                type="submit" 
                                name="modID"
                                value="1"
                                disabled>
                            <h1>Модуль 4</h1>
                            <p> Раз уж речь зашла о совершенствовании самых примитивных навыков, стоит вспомнить о третьем наыке из золотого трио - чистописании.
                            </p>
                        </button>
                    </form>
                </td>
                <td width=9% class="status">
                    <img src="images/1.png">
                </td>
            </tr>
            
        </table>
        
        
    </body>
    
</html>
