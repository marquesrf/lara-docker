<h1>Fornecedores</h1>
{{-- Exemplo de Comentário --}}

{{-- Exemplo de if --}}
{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados<h3>
@elseif(count($fornecedores) > 0 && count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados<h3>
@else
    <h3>Não existem fornecedores cadastrados<h3>
@endif --}}

{{-- Exemplo de uso do 'unless' --}}
{{-- @unless($fornecedores)
    <h3>Nenhum fornecedor encontrado.</h3>
@endunless
@unless($fornecedores[0]['status'] == 'S')
    <h3>Fornecedor inativo</h3>
@endunless --}}

{{-- Exemplo de uso do 'isset' --}}
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset --}}

{{-- Exemplo de uso do 'empty' --}}
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
        @empty($fornecedores[1]['cnpj'])
            Vazio
        @endempty
    @endisset
@endisset --}}

{{-- Exemplo de uso do operador ternário --}}
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Não Definido' }} <-- testa isset e NULL -->
@endisset --}}

{{-- Exemplo de uso do 'switch/case' --}}
{{-- @isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Não Definido' }}
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '00' }}){{ $fornecedores[1]['telefone'] ?? '00' }}
    @switch($fornecedores[1]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch
@endisset --}}

{{-- Exemplo de uso do 'for' --}}
{{-- @isset($fornecedores)
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não Definido' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '00' }}){{ $fornecedores[$i]['telefone'] ?? '00' }}
        <hr>
    @endfor
@endisset --}}

{{-- Exemplo de uso do 'while' --}}
{{-- @isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Não Definido' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '00' }}){{ $fornecedores[$i]['telefone'] ?? '00' }}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset --}}

{{-- Exemplo de uso do 'foreach' --}}
{{-- @isset($fornecedores)
    @foreach($fornecedores as $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não Definido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '00' }}){{ $fornecedor['telefone'] ?? '00' }}
        <hr>
    @endforeach
@endisset --}}

{{-- Exemplo de uso do 'forelse' --}}
@isset($fornecedores)
    @forelse($fornecedores as $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não Definido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '00' }}){{ $fornecedor['telefone'] ?? '00' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse
@endisset
