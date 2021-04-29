  @csrf
  
  <div class="mb-3">
    <label for="nome_completo" class="form-label">Nome Completo</label>
    <input value="{{ @$diarista->nome_completo }}" type="text" class="form-control" id="nome_completo" name="nome_completo" required maxlength="100">
  </div>
  <div class="mb-3">
      <label for="cpf" class="form-label">CPF</label>
      <input value="{{ @$diarista->cpf }}" type="text" class="form-control" id="cpf" name="cpf" required maxlength="14">
  </div>
  <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input value="{{ @$diarista->email }}" type="email" class="form-control" id="email" name="email" required maxlength="100">
  </div>
  <div class="mb-3">
      <label for="telefone" class="form-label">Telefone</label>
      <input value="{{ @$diarista->telefone }}" type="text" class="form-control" id="telefone" name="telefone" required maxlength="15">
  </div>
  <div class="mb-3">
      <label for="logradouro" class="form-label">Logradouro</label>
      <input value="{{ @$diarista->logradouro }}" type="text" class="form-control" id="logradouro" name="logradouro" required maxlength="255">
  </div>
  <div class="mb-3">
      <label for="numero" class="form-label">Número</label>
      <input value="{{ @$diarista->numero }}" type="text" class="form-control" id="numero" name="numero" required maxlength="20">
  </div>
  <div class="mb-3">
      <label for="complemento" class="form-label">Complemento</label>
      <input value="{{ @$diarista->complemento }}" type="text" class="form-control" id="complemento" name="complemento" maxlength="50">
  </div>
  <div class="mb-3">
      <label for="cep" class="form-label">CEP</label>
      <input value="{{ @$diarista->cep }}" type="text" class="form-control" id="cep" name="cep" required maxlength="9">
  </div>
  <div class="mb-3">
      <label for="bairro" class="form-label">Bairro</label>
      <input value="{{ @$diarista->bairro }}" type="text" class="form-control" id="bairro" name="bairro" required maxlength="50">
  </div>
  <div class="mb-3">
      <label for="cidade" class="form-label">Cidade</label>
      <input value="{{ @$diarista->cidade }}" type="text" class="form-control" id="cidade" name="cidade" required maxlength="50">
  </div>
  <div class="mb-3">
      <label for="estado" class="form-label">Estado</label>
      <input value="{{ @$diarista->estado }}" type="text" class="form-control" id="estado" name="estado" required maxlength="2">
  </div>

  <div class="mb-3">
      <label for="foto_usuario" class="form-label">Foto</label>
      <input type="file" class="form-control" id="foto_usuario" name="foto_usuario" >
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>