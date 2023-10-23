# MQTT GESTÃO DE CLIENTES

### Escopo:

1. Cadastro de Clientes
	Um formulário para cadastro de clientes com informações relacionadas ao mesmo, como nome, endereço, contato, etc
	Deverá haver um botão ou menu para cadastro de dispositivos deste cliente
	Deverá haver um botão ou menu para cadastro de mídias deste cliente
	

2. Cadastro de Dispositivos
	Um formulário onde cada dispositivo ao ser cadastrado possa ser vinculado a um cliente e tenha automaticamente criada uma pasta no servidor e um usuário e senha ftp para acesso à esta pasta.
	A pasta criada pode ser acessada pelo painel via gerenciador de arquivos elFinder e deverá haver um link ou botão para acesso direto co o elfinder já abrindo a respectiva pasta.
	

3. Cadastro de mídias
	Um campo para cadastro e upload de mídia vinculada a cada cliente, onde ao fazer upload escolhemos para quais dos dispositivos cadastrados a esta mídia irá, podendo ser um, vários, todos ou nenhum.
	A mídia só poderá ser vinculada a dispositivos do usuário (execeto o admin que poderá vincular qualquer mídia a qualquer dispositivo e usuário)
	Ao definir os dispositivos que a mídia irá, o sistema deverá fazer uma cópia da mídia para cada pasta referente ao dispositivo.
	Na lista de mídia deverá mostrar em quais dispositivos ela está vinculada e dever haver a possibilidade de editar esta vinculação.
	Ao desvincular uma mídia de um determinado dispositivo, a mesma deverá ser deletada da respectiva pasta.	
	Deverá haver a possibilidade de "agendar" uma mídia a seguinte maneira, ao fazer upload deverá ter um calendário que se definido a mídia só será copiada para as respectivas pastas na data definida como início de sua execução e deverá ser deletada na data definida como final de sua execução.