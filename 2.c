#include <stdio.h>
#define STRSIZ 80

int main(void)
{
    char in_name[STRSIZ], out_name[STRSIZ];
    FILE *inp, *outp;

    char ch;
    printf("Enter name of file you want to back up> ");

    for (scanf("%s", in_name); (inp = fopen(in_name, "r")) == NULL;
    scanf("%s", in_name))
    {
        printf("Cannot open %s for input\n", in_name);
        printf("Re-enter file name> ");
    }

    printf("Enter name for backup copy> ");

    for (scanf("%s", out_name);(outp = fopen(out_name, "w")) == NULL;
    scanf("%s", out_name))
    {
        printf("Cannot open %s for output\n", out_name);
        printf("Re-enter file name> ");
    }

    for (ch = getc(inp); ch != EOF; ch = getc(inp))
    putc(ch, outp);

    fclose(inp);
    fclose(outp);
    printf("Copied %s to %s.\n", in_name, out_name);

    return(0);
}
