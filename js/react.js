< html >
    <
    head >
    <
    meta charset = "utf-8" >
    <
    meta http - equiv = "x-UA-Compatible"
content = "IE=edge" >
    <
    title > Exemplo 01 React < /title>  <
    meta name = "viewport"
content = "width=device-width, initial-scale=1" >

    <
    /head>

<
body >

    <
    div id = "conteudo" > < /div> 

<
script type = "text/babel" >
    class App extends React.Component {
        Render() {
            return ( <
                div >
                <
                p > Olá Recode!!!Esse é nosso primeiro Componente React < /p>  <
                /div>
            )
        }
    }
ReactDOM.render( < app / > , document.getElementById("conteudo")) <
    /script>  <
    script src = "https://unpkg.com/react@16/umd/react.development.js"
crossorigin > < /script>  <
    script src = "https://unpkg.com/react-dom@16/umd/react-dom.development.js"
crossorigin > < /script>  <
    script src = "https://unpkg.com/babel-standalone@6/babel.min.js" > < /script>  <
    /body> <
    /html>