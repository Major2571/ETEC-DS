// Esse código permite que, ao clicar no elemento toggleReclamacoes, as reclamações sejam ocultadas ou exibidas, e o ícone do botão de toggle seja alterado entre "+" e "-". 

function toggleReclamacoes(labId) {
    const toggleContent = document.querySelector(`.toggle-content[data-lab="${labId}"]`);
    toggleContent.classList.toggle('hidden');

    // Selecionar o ícone dentro do botão correspondente ao labId
    const toggleButton = document.querySelector(`.toggle-button[data-lab="${labId}"]`);
    const icon = toggleButton.querySelector('i');

    // Alternar a classe do ícone entre 'fa-plus' e 'fa-minus'
    icon.classList.toggle('fa-plus');
    icon.classList.toggle('fa-minus');
}
