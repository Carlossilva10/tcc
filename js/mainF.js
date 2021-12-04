let btnRandom = document.querySelector('button');
let result = document.querySelector('h1');
 

let quotes =[
	{
		"quote": "Se você traçar metas absurdamente altas e falhar, seu fracasso será muito melhor que o sucesso de todos" + "– James Cameron cineasta"},

	{
		"quote": "O sucesso normalmente vem para quem está ocupado demais para procurar por ele" + "– Henry David Thoreau, filósofo"},
		
	{
		"quote": "A vida é melhor para aqueles que fazem o possível para ter o melhor" + " – John Wooden, jogador e treinador de basquete"},
	
	{
		"quote": "Os empreendedores falham, em média, 3,8 vezes antes do sucesso final. O que separa os bem-sucedidos dos outros é a persistência" + "– Lisa M. Amos, executiva"},
	
	{
		"quote": "Se você não está disposto a arriscar, esteja disposto a uma vida comum" + "– Jim Rohn, empreendedor"},
	
	{
		"quote": "Escolha uma ideia. Faça dessa ideia a sua vida. Pense nela, sonhe com ela, viva pensando nela. Deixe cérebro, músculos, nervos, todas as partes do seu corpo serem preenchidas com essa ideia. Esse é o caminho para o sucesso" + "– Swami Vivekananda, pensador hindu"},
	
	{
		"quote": "Para de perseguir o dinheiro e comece a perseguir o sucesso" + "– Tony Hsieh, empreendedor"},

	{
		"quote": "Todos os seus sonhos podem se tornar realidade se você tem coragem para persegui-los" + "Walt Disney, desenhista e empreendedor"},

	{
		"quote": "Ter sucesso é falhar repetidamente, mas sem perder o entusiasmo" + "Winston Churchill, político"},

	{
		"quote": "Sempre que você vir uma pessoa de sucesso, você sempre verá as glórias, nunca os sacrifícios que os levaram até al" + "Vaibhav Shah, pensador"},
	
	{
		"quote": "Sucesso? Eu não sei o que isso significa. Eu sou feliz. A definição de sucesso varia de pessoa para pessoa Para mim, sucesso é paz anterio" + "Denzel Washington, ator"},
	
	{
		"quote": "Não tente ser uma pessoa de sucesso. Em vez disso, seja uma pessoa de valor" + "Albert Einstein, físico"},
		
	{
		"quote": "Não é o mais forte que sobrevive, nem o mais inteligente. Quem sobrevive é o mais disposto à mudança" + "harles Darwin, biólogo"},
		
	
	]
 
const btn = document.getElementById("btn");
const quote = document.getElementById("quote");

btn.addEventListener('click', getQuote);

function getQuote (){

	let number = Math.floor(Math.random() * quotes.length)

	quote.innerHTML = '<span>"</span>' + quotes[number].quote + '<span>"</span>';


}

  

