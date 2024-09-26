interface HomeProps {
  data: {
    id: number;
    title: string;
    content: string;
  };
}

const PageHome = ({ data }: HomeProps) => {
  return (
    <>
      <h1 className="text-red-500 text-3xl">My Home</h1>
      {data.id} - {data.title} - {data.content}
    </>
  );
};

export default PageHome;
