@echo off

set USER=seu_usuario
set PASSWORD=sua_senha
set DATABASE=seu_banco_de_dados
set HOST=localhost

for %%f in (*.sql) do (
  mysql -h %HOST% -u %USER% -p%PASSWORD% %DATABASE% < %%f
)