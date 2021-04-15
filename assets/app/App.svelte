<main>
    <h1> Symfony + Svelte = Love!!! </h1>
    <Tasks />
</main>

<style>
    h1 {
        text-align: center;
        color: #D26D26;
    }
</style>

<script lang="ts">
    import { onMount } from 'svelte';
    import Tasks from './components/Tasks.svelte';

    let message: string = "Hello, Symfony + Svelte!ss";

    onMount(() => {
        console.log(`${message}`);
    });
</script>