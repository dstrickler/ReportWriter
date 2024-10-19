@livewire('report')

<?PHP
// For debugging only
if (isset($this) == FALSE) {
    echo "\$this value is undefined in the Blade";
    exit();
}
?>

<div>
    You are in the report.blade file.
    {{ $this->table }}
</div>
