<script>
    $(function() {
        $("#sortable").sortable({
            handle: '.handle',
            update: function(event, ui) {
                const taskIds = [];
                $("#sortable tr").each(function() {
                    taskIds.push($(this).data('task-id'));
                });
                
                console.log('Sending task IDs:', taskIds);
                
                $.ajax({
                    url: '{{ route("tasks.reorder") }}',
                    method: 'POST',
                    data: {
                        task_ids: taskIds,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Tasks reordered successfully');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed to reorder tasks');
                    }
                });
            }
        });
    });
</script>