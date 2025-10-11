</div>
    </div>

    <script>
        // mobile sidebar (simple toggle)
        const mobileOpen = document.getElementById('mobile-open');
        mobileOpen && mobileOpen.addEventListener('click', () => {
            const aside = document.querySelector('aside');
            aside.classList.toggle('hidden');
        });

        // basic tab handling (only one tab now: produk)
        document.querySelectorAll('[data-tab]').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const name = btn.getAttribute('data-tab');
                // deactivate other tab buttons
                document.querySelectorAll('[data-tab]').forEach(b => b.classList.remove('active-tab'));
                btn.classList.add('active-tab');
                // hide all tab content
                document.querySelectorAll('.tab-content').forEach(s => s.style.display = 'none');
                // show selected
                const section = document.getElementById('tab-' + name);
                if (section) section.style.display = 'block';
            });
        });

        // ensure Produk tab visible by default
        document.getElementById('tab-produk').style.display = 'block';
    </script>
</body>

</html>
