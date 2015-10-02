$("#frmprofessor").validate({
     rules: {
          nome: {
               required: true
          },
          rg: {
               required: true
          },
          cpf: {
               required: true
          },
          crefito: {
               required: true
          },
          data: {
               required: true
          },
          fixo: {
               required: true
          },
          celular: {
               required: true
          },
          estado: {
               required: true
          },
          cidade: {
               required: true
          },
          endereco: {
               required: true
          },
          numero: {
               required: true
          },
          bairro: {
               required: true
          },
          cep: {
               required: true
          },
          email: {
               required: true
          },
          banco: {
               required: true
          },
          permissao: {
               required: true
          },
          observacao: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe o nome do fisioterapeuta !"
          },
          rg: {
               required: "Informe o rg !"
          },
          cpf: {
               required: "Informe o cpf !"
          },
          crefito: {
               required: "Informe o crefito !"
          },
          data: {
               required: "Informe a data de nascimento! "
          },
          fixo: {
               required: "Informe o telefone fixo !"
          },
          celular: {
               required: "Informe o celular !"
          },
          estado: {
               required: "Informe o estado !"
          },
          cidade: {
               required: "Informe a cidade !"
          },
          endereco: {
               required: "Informe o endereco !"
          },
          numero: {
               required: "Informe o numero da residência !"
          },
          bairro: {
               required: "Informe o bairro !"
          },
          cep: {
               required: "Informe o cep !"
          },
          email: {
               required: "Informe o e-mail !"
          },
          banco: {
               required: "Informe o banco !"
          },
          permissao: {
               required: "Informe a permissao !"
          },
          observacao: {
               required: "Informe a observação !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});

$("#frmeditarprofessor").validate({
     rules: {
          nome: {
               required: true
          },
          rg: {
               required: true
          },
          cpf: {
               required: true
          },
          crefito: {
               required: true
          },
          datepicker: {
               required: true
          },
          fixo: {
               required: true
          },
          celular: {
               required: true
          },
          estado: {
               required: true
          },
          cidade: {
               required: true
          },
          endereco: {
               required: true
          },
          numero: {
               required: true
          },
          bairro: {
               required: true
          },
          cep: {
               required: true
          },
          email: {
               required: true
          },
          banco: {
               required: true
          },
          permissao: {
               required: true
          },
          observacao: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe o nome do fisioterapeuta !"
          },
          rg: {
               required: "Informe o rg !"
          },
          cpf: {
               required: "Informe o cpf !"
          },
          crefito: {
               required: "Informe o crefito !"
          },
          datepicker: {
               required: "Informe a data de nascimento! "
          },
          fixo: {
               required: "Informe o telefone fixo !"
          },
          celular: {
               required: "Informe o celular !"
          },
          estado: {
               required: "Informe o estado !"
          },
          cidade: {
               required: "Informe a cidade !"
          },
          endereco: {
               required: "Informe o endereco !"
          },
          numero: {
               required: "Informe o numero da residência !"
          },
          bairro: {
               required: "Informe o bairro !"
          },
          cep: {
               required: "Informe o cep !"
          },
          email: {
               required: "Informe o e-mail !"
          },
          banco: {
               required: "Informe o banco !"
          },
          permissao: {
               required: "Informe a permissao !"
          },
          observacao: {
               required: "Informe a observação !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});

$("#cadalunos, #frmalunos").validate({
     rules: {
          nome: {
               required: true
          },
          estado_civil: {
               required: true
          },
          cpf: {
               required: true
          },
          rg: {
               required: true
          },
          datepicker: {
               required: true
          },
          fixo: {
               required: true
          },
          celular: {
               required: true
          },
          estado: {
               required: true
          },
          cidade: {
               required: true
          },
          endereco: {
               required: true
          },
          numero: {
               required: true
          },
          bairro: {
               required: true
          },
          cep: {
               required: true
          },
          atual: {
               required: true
          },
          anterior: {
               required: true
          },
          legal: {
               required: true
          },
          professor: {
               required: true
          },
          observacao: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe o nome do aluno !"
          },
          estado_civil: {
               required: "Informe o estado civil !"
          },
          cpf: {
               required: "Informe o cpf !"
          },
          rg: {
               required: "Informe o rg !"
          },
          datepicker: {
               required: "Informe a data de nascimento! "
          },
          fixo: {
               required: "Informe o telefone fixo !"
          },
          celular: {
               required: "Informe o celular !"
          },
          estado: {
               required: "Informe o estado !"
          },
          cidade: {
               required: "Informe a cidade !"
          },
          endereco: {
               required: "Informe o endereco !"
          },
          numero: {
               required: "Informe o numero da residência !"
          },
          bairro: {
               required: "Informe o bairro !"
          },
          cep: {
               required: "Informe o cep !"
          },
          atual: {
               required: "Informe o trabalho atual !"
          },
          anterior: {
               required: "Informe o trabalho anterior !"
          },
          legal: {
               required: "Informe o responsavel legal !"
          },
          professor: {
               required: "Informe o professor !"
          },
          observacao: {
               required: "Informe a observação !"
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
$("#frmcadpatrimonio").validate({
     rules: {
          nome: {
               required: true
          },
          datepicker: {
               required: true
          },
          quantidade: {
               required: true
          },
          valor: {
               required: true
          },
          professor: {
               required: true
          }
     },
     messages: {
          nome: {
               required: "Informe a descrição do produto !"
          },
          datepicker: {
               required: "Informe a data !"
          },
          quantidade: {
               required: "Informe a quantidade !"
          },
          valor: {
               required: "Informe o valor !"
          },
          professor: {
               required: "Informe o professor! "
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
$("#frmmensalidade").validate({
     rules: {
          alunos: {
               required: true
          },
          mensalidade: {
               required: true
          },
          parcela: {
               required: true
          },
          datepicker: {
               required: true
          },
          pagamento: {
               required: true
          },
          datepicker1: {
               required: true
          },
          professor: {
               required: true
          }
     },
     messages: {
          alunos: {
               required: "Informe o aluno !"
          },
          mensalidade: {
               required: "Informe a mensalidade !"
          },
          parcela: {
               required: "Informe a parcela !"
          },
          datepicker: {
               required: "Informe a data de vencimento !"
          },
          pagamento: {
               required: "Informe a situação do pagamento! "
          },
          datepicker1: {
               required: "Informe a data do pagamento! "
          },
          professor: {
               required: "Informe o professor! "
          }
     },
     errorLabelContainer: "#minhalistaerros",
     errorElement: "div"
});
