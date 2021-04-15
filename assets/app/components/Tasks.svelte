<script lang="ts">
    import { onMount } from 'svelte';
    import { TaskFactory } from "../data/factories/TaskFactory";

    let tasks = [];
    let isLoading = false;

    onMount(() => {
        isLoading = true;
        fetch('/api/tasks')
            .then(res => {
                if(!res.ok) {
                    throw new Error('API Fetch failed...');
                }

                return res.json()
            })
            .then(data => {
                tasks = TaskFactory.fromJsonArray(data);
                isLoading = false;
            })
            .catch(err => {
                console.log("An error occurred while attempting to fetch a list of tasks...");
                console.log(err);
                isLoading = false;
            });
    });
</script>

{#if isLoading}
    <p>Fetching data...</p>
{:else}
    <ul>
        {#each tasks as task}
            <li>{task.title}</li>
        {/each}
    </ul>
{/if}