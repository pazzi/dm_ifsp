{include file="header.tpl"}
{include file="nav.tpl"}

<div class="container mt-3 border border-secondary">
<h3>Cursos de graduação IFSP</h3>
<h4>Consultas de curso de gradução </h4>
<h5>Desenvolvimento</h5>
<p>Linguagem de programação - PHP + Smarty Template - separar o código PHP do HTML</p>
<p>Banco de Dados MySQL</p>
<p>HTML-5 + Bootstrapp</p

<h5>Disposição das páginas</h5>
<p>Parte administrativa</p>
<pre>
session.php
	inicio.php
			cadastro.php [novo]
			inicio.php[excluir]
			alterar_curso.php[alterar]
			
		municipios.php [link]
			cad_municipio.php[novo]
			municipios.php[excluir]
			alterar_municipio.php[alterar]
</pre>
			
			
<p>Parte Publica</p>
<pre>
index.php
	mostra_cursos.php
	
index_cidade.php
	mostra_cidade.php
</pre>
			
   <h4>Esquema do Banco de dados</h4>
<img src="/docs/schema.png"></img> 
<h4>Fontes</h4>
Fontes em <a href="github.com/pazzi/dm_ifsp">github.com/pazzi/dm_ifsp</a>
</div>

{include file="footer.tpl"}

