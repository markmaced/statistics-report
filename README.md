# Statistics Report

## Visão Geral

O **Statistics Report** é um plugin WordPress que adiciona o comando `wp statistics-report generate` para gerar um relatório de estatísticas de cliques. Este comando recupera dados da tabela `statistics_data` e os exibe na interface WP-CLI.

## Uso

Após ativar o plugin, você pode usar o seguinte comando WP-CLI para gerar um relatório de estatísticas de cliques.

wp statistics-report generate [--limit=<número>]

## Opções

--limit: Limita o número de resultados a serem exibidos.

## Exemplos

Gerar um Relatório de Estatísticas de Cliques:

wp statistics-report generate

Gerar um Relatório de Estatísticas de Cliques com Limite:

wp statistics-report generate --limit=10

Este comando exibirá as últimas 10 estatísticas de cliques.

## Observações

O comando statistics-report recupera dados da tabela statistics_data e os exibe em ordem descendente com base no horário do clique.
