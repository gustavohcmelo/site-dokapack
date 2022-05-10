<table align="center" border='0' bgcolor="#f8ffff" width="800px" style="border-collapse:collapse;font-family:arial;">
    <tr>
        <td colspan='4' ><img src="https://via.placeholder.com/800x200" /></td>
    </tr>
    <tr>
        <td style="padding:25px;"></td>
        <td style="font-size:1.5rem;padding:0px 25px;color:#495057;" colspan="2"><strong><span>Email da área trabalhe conosco<span><strong></td>
        <td style="padding:10px 25px;"></td>
    </tr>
    <tr>
        <td></td>
        <td style="font-size:1.2rem;padding:10px 25px;color:#495057;" colspan="2"><span>Olá, <strong>{{ $dados['nome_completo'] }}</span></strong></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="font-size:1rem;padding:0px 25px 10px 25px;color:#495057;" colspan="2">Obrigado por se candidatar à uma vaga na Dokapack. Aguarde nosso contato. Dados do Candidato:</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:2px 25px;" colspan="2">CPF: {{ $dados['cpf'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:2px 25px;" colspan="2">CPF: {{ $dados['telefone'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:2px 25px;" colspan="2">Área de Interesse: {{ $dados['interesse'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:2px 25px;" colspan="2">Cargo: {{ $dados['cargo'] }}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="font-size:1rem;padding:25px;color:#495057;" colspan="2">Caso não tenha se candidatado, por favor, desconsidere esta mensagem.</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:5px 25px;color:#495057;" colspan="2">Equipe Dokapack</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style="padding:2px 25px 10px 25px;" colspan="2"><a style="text-decoration:none;color:#495057;" href="https://www.dokapack.com.br/" target="_blank">www.dokapack.com.br</a></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="4" style="padding:10px 25px;text-align:center;font-size:0.8rem;color:#555;">Copyright {{ date('Y') }} - <a class="text-decoration-none" target="_blank" href="https://www.dokapack.com.br/">Dokapack</a> - Todos os direitos reservados - <a href="https://www.dokapack.com.br/" target="_blank">Segurança e privacidade</a>.</td>
    </tr>
</table>